#!/bin/bash

str=`docker network ls`
sub='wp_net'

if [[ "$str" != *"$sub"* ]]; then
	echo "Creating bridge network 'wp_net' \n" `docker network create -d bridge wp_net` 
fi

str=`docker volume ls`
sub='db_file'

if [[ "$str" != *"$sub"* ]]; then
	echo "Creating volume 'db_file' \n" `docker volume create db_file`
fi

docker run -tid --name wp_mysql -h mysql --restart=unless-stopped --env-file .env -v db_file:/var/lib/mysql --net wp_net mysql

docker build -t php-fpm .

docker run -tid --name wp_php-fpm -h php-fpm --restart=unless-stopped --expose=9000 --env-file .env -e WORDPRESS_DB_HOST=mysql:3306 -e WORDPRESS_DB_USER=$MYSQL_USER -e WORDPRESS_DB_PASSWORD=$MYSQL_PASSWORD -e WORDPRESS_DB_NAME=$MYSQL_DATABASE -v ~/Documents/docker/wordpress-bash/wordpress:/var/www/wordpress --net wp_net wp_php

docker run -tid --name wp_nginx -h nginx --restart=unless-stopped -p 80:80 -v ~/Documents/docker/wordpress-bash/wordpress:/var/www/wordpress -v ~/Documents/docker/wordpress-bash/conf.d:/etc/nginx/conf.d --net wp_net nginx
