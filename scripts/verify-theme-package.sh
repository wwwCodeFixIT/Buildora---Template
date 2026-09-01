#!/usr/bin/env bash
set -euo pipefail

ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
ZIP_FILE="$ROOT/build/lexora.zip"

if [[ ! -f "$ZIP_FILE" ]]; then
  echo "Missing package: $ZIP_FILE" >&2
  exit 1
fi

mapfile -t entries < <(unzip -Z1 "$ZIP_FILE")

required=(
  "lexora/style.css"
  "lexora/functions.php"
  "lexora/theme.json"
  "lexora/templates/index.html"
  "lexora/templates/front-page.html"
  "lexora/assets/dist/manifest.json"
  "lexora/README.md"
  "lexora/readme.txt"
  "lexora/CHANGELOG.md"
  "lexora/LICENSE"
)

for required_path in "${required[@]}"; do
  if ! printf '%s\n' "${entries[@]}" | grep -Fxq "$required_path"; then
    echo "Package is missing required file: $required_path" >&2
    exit 1
  fi
done

if ! printf '%s\n' "${entries[@]}" | grep -Eq '^lexora/assets/dist/css/.+\.css$'; then
  echo "Package is missing compiled production CSS." >&2
  exit 1
fi

forbidden_patterns=(
  '^lexora/\.git/'
  '^lexora/\.github/'
  '^lexora/\.devcontainer/'
  '^lexora/node_modules/'
  '^lexora/playground/'
  '^lexora/scripts/'
  '^lexora/src/'
  '^lexora/build/'
  '^lexora/package\.json$'
  '^lexora/package-lock\.json$'
  '^lexora/vite\.config\.js$'
  '^lexora/eslint\.config\.js$'
  '^lexora/CLOUD-WORKFLOW\.md$'
)

for pattern in "${forbidden_patterns[@]}"; do
  if printf '%s\n' "${entries[@]}" | grep -Eq "$pattern"; then
    echo "Development-only path leaked into package: $pattern" >&2
    exit 1
  fi
done

pattern_markup="$(unzip -p "$ZIP_FILE" 'lexora/patterns/*.php')"

if grep -Eq 'href="/?#contact"' <<<"$pattern_markup"; then
  echo "Legacy #contact CTA leaked into packaged patterns." >&2
  exit 1
fi

if grep -Eq 'href="/' <<<"$pattern_markup"; then
  echo "Root-relative href leaked into packaged PHP patterns; use home_url() instead." >&2
  exit 1
fi

if grep -Eq '"url":"/' <<<"$pattern_markup"; then
  echo "Root-relative navigation URL leaked into packaged PHP patterns; use home_url() instead." >&2
  exit 1
fi

theme_version="$(unzip -p "$ZIP_FILE" lexora/style.css | awk -F': ' '/^Version:/ { print $2; exit }' | tr -d '\r')"
runtime_version="$(unzip -p "$ZIP_FILE" lexora/functions.php | sed -n "s/^define( 'LEXORA_VERSION', '\([^']*\)' );$/\1/p" | head -n 1 | tr -d '\r')"

if [[ -z "$theme_version" || -z "$runtime_version" ]]; then
  echo "Could not resolve package version metadata." >&2
  exit 1
fi

if [[ "$theme_version" != "$runtime_version" ]]; then
  echo "Version mismatch: style.css=$theme_version functions.php=$runtime_version" >&2
  exit 1
fi

echo "Verified Lexora package $theme_version (${#entries[@]} ZIP entries)."
