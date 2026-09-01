#!/usr/bin/env bash
set -euo pipefail

ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
BUILD_DIR="$ROOT/build"
STAGE_DIR="$BUILD_DIR/lexora"
ZIP_FILE="$BUILD_DIR/lexora.zip"
PREVIEW_ALIAS="$BUILD_DIR/buildora.zip"

rm -rf "$STAGE_DIR" "$ZIP_FILE" "$PREVIEW_ALIAS"
mkdir -p "$STAGE_DIR"

rsync -a "$ROOT/" "$STAGE_DIR/" \
  --exclude='.git/' \
  --exclude='.github/' \
  --exclude='.devcontainer/' \
  --exclude='build/' \
  --exclude='node_modules/' \
  --exclude='playground/' \
  --exclude='scripts/' \
  --exclude='src/' \
  --exclude='.gitignore' \
  --exclude='.prettierignore' \
  --exclude='.prettierrc.json' \
  --exclude='eslint.config.js' \
  --exclude='package.json' \
  --exclude='package-lock.json' \
  --exclude='vite.config.js' \
  --exclude='CLOUD-WORKFLOW.md' \
  --exclude='RELEASE-CHECKLIST.md'

(
  cd "$BUILD_DIR"
  zip -qr lexora.zip lexora
)

# Keep the legacy preview filename temporarily because the PR preview publisher
# on the default branch still expects build/buildora.zip.
cp "$ZIP_FILE" "$PREVIEW_ALIAS"

echo "Created $ZIP_FILE"
