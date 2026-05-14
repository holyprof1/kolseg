#!/usr/bin/env bash
set -euo pipefail

if [ "${1:-}" = "" ]; then
  echo "Usage: bash cpanel-theme/deploy-theme.sh /home/USERNAME/public_html/wp-content/themes"
  exit 1
fi

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
SOURCE_DIR="$SCRIPT_DIR/kolseg-design-services"
TARGET_ROOT="${1%/}"
TARGET_DIR="$TARGET_ROOT/kolseg-design-services"

if [ ! -d "$SOURCE_DIR" ]; then
  echo "Source theme folder not found: $SOURCE_DIR"
  exit 1
fi

mkdir -p "$TARGET_ROOT"

if command -v rsync >/dev/null 2>&1; then
  rsync -av --delete "$SOURCE_DIR/" "$TARGET_DIR/"
else
  rm -rf "$TARGET_DIR"
  mkdir -p "$TARGET_DIR"
  cp -a "$SOURCE_DIR/." "$TARGET_DIR/"
fi

echo "Theme deployed to: $TARGET_DIR"
echo "Next: activate or refresh the theme in WordPress, then open Appearance > Kolseg Setup."
