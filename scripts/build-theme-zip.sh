#!/usr/bin/env bash
set -euo pipefail

ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
BUILD_DIR="$ROOT/build"
STAGE_DIR="$BUILD_DIR/buildora"
ZIP_FILE="$BUILD_DIR/buildora.zip"

rm -rf "$STAGE_DIR" "$ZIP_FILE"
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
  --exclude='CLOUD-WORKFLOW.md'

(
  cd "$BUILD_DIR"
  zip -qr buildora.zip buildora
)

echo "Created $ZIP_FILE"
