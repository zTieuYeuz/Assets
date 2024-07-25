mkdir -p container
mkdir -p volume
#lưu file docker container
docker commit  snipeit backup_container_snipeit 
docker save -o ./container/backup_container_snipeit.tar backup_container_snipeit

docker commit mysql backup_container_mysql
docker save -o ./container/backup_container_mysql.tar backup_container_mysql

#lưu volume 
sudo tar -czvf ./volume/volume_snipeit_data.tar /var/lib/docker/volumes/snipe-it_snipeit-data/_data
sudo tar -czvf ./volume/volume_mysql_data.tar /var/lib/docker/volumes/snipe-it_mysql-data/_data
cp ./../snipe-it/mysql/init.sql ./volume/init.sql