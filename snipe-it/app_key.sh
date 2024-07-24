#!/bin/bash

# Tạo APP_KEY
APP_KEY=$(docker run --rm snipe/snipe-it php artisan key:generate --show)
echo $APP_KEY
# Cập nhật docker-compose.yml với APP_KEY mới
sed -i  "s|APP_KEY=.*|APP_KEY=${APP_KEY}|" docker-compose.yml

echo "Đã cập nhật docker-compose.yml với APP_KEY mới: ${APP_KEY}"
