#!/usr/bin/env bash
set -euo pipefail

ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
ZIP_FILE="$ROOT/build/buildora.zip"

if [[ ! -f "$ZIP_FILE" ]]; then
  echo "Missing package: $ZIP_FILE" >&2
  exit 1
fi

mapfile -t entries < <(unzip -Z1 "$ZIP_FILE")

required=(
  "buildora/style.css"
  "buildora/functions.php"
  "buildora/theme.json"
  "buildora/templates/index.html"
  "buildora/templates/front-page.html"
  "buildora/assets/dist/manifest.json"
  "buildora/README.md"
  "buildora/readme.txt"
  "buildora/CHANGELOG.md"
  "buildora/LICENSE"
)

for required_path in "${required[@]}"; do
  if ! printf '%s\n' "${entries[@]}" | grep -Fxq "$required_path"; then
    echo "Package is missing required file: $required_path" >&2
    exit 1
  fi
done

if ! printf '%s\n' "${entries[@]}" | grep -Eq '^buildora/assets/dist/css/.+\.css$'; then
  echo "Package is missing compiled production CSS." >&2
  exit 1
fi

forbidden_patterns=(
  '^buildora/\.git/'
  '^buildora/\.github/'
  '^buildora/\.devcontainer/'
  '^buildora/node_modules/'
  '^buildora/playground/'
  '^buildora/scripts/'
  '^buildora/src/'
  '^buildora/build/'
  '^buildora/package\.json$'
  '^buildora/package-lock\.json$'
  '^buildora/vite\.config\.js$'
  '^buildora/eslint\.config\.js$'
  '^buildora/CLOUD-WORKFLOW\.md$'
)

for pattern in "${forbidden_patterns[@]}"; do
  if printf '%s\n' "${entries[@]}" | grep -Eq "$pattern"; then
    echo "Development-only path leaked into package: $pattern" >&2
    exit 1
  fi
done

theme_version="$(unzip -p "$ZIP_FILE" buildora/style.css | awk -F': ' '/^Version:/ { print $2; exit }' | tr -d '\r')"
runtime_version="$(unzip -p "$ZIP_FILE" buildora/functions.php | sed -n "s/^define( 'BUILDORA_VERSION', '\([^']*\)' );$/\1/p" | head -n 1 | tr -d '\r')"

if [[ -z "$theme_version" || -z "$runtime_version" ]]; then
  echo "Could not resolve package version metadata." >&2
  exit 1
fi

if [[ "$theme_version" != "$runtime_version" ]]; then
  echo "Version mismatch: style.css=$theme_version functions.php=$runtime_version" >&2
  exit 1
fi

echo "Verified Buildora package $theme_version (${#entries[@]} ZIP entries)."
