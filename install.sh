#!/bin/bash
PTERO_DIR="/var/www/pterodactyl"

echo "🚀 Installing ThunderTheme..."

# Backup original files
if [ ! -d "$PTERO_DIR/resources/views_backup" ]; then
  cp -r "$PTERO_DIR/resources/views" "$PTERO_DIR/resources/views_backup"
fi
if [ ! -d "$PTERO_DIR/public_backup" ]; then
  cp -r "$PTERO_DIR/public" "$PTERO_DIR/public_backup"
fi

# Copy theme files
cp -r resources/views/* "$PTERO_DIR/resources/views/"
cp -r public/* "$PTERO_DIR/public/"

cd "$PTERO_DIR" || exit
npm install --silent
npm run build
php artisan view:clear
php artisan cache:clear

echo "✅ ThunderTheme installed successfully!"
