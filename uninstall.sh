#!/bin/bash
PTERO_DIR="/var/www/pterodactyl"

echo "🔄 Restoring default Pterodactyl theme..."

if [ -d "$PTERO_DIR/resources/views_backup" ]; then
  rm -rf "$PTERO_DIR/resources/views"
  cp -r "$PTERO_DIR/resources/views_backup" "$PTERO_DIR/resources/views"
fi

if [ -d "$PTERO_DIR/public_backup" ]; then
  rm -rf "$PTERO_DIR/public"
  cp -r "$PTERO_DIR/public_backup" "$PTERO_DIR/public"
fi

cd "$PTERO_DIR" || exit
npm run build
php artisan view:clear
php artisan cache:clear

echo "✅ Default theme restored!"
