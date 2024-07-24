chmod +x app_key.sh
chmod +x docker-compose.yml
./app_key.sh
docker-compose up -d
docker-compose logs -f 

