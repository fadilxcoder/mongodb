# Docker, MongoDB & PHP on AWS C9

- All configs regarding building the docker container is in `docker` folder
- 2 files needed for mongodb : `Docker` & `mongod.conf` - **Important settings in mongod.conf (bindIp, dbPath, path)**
- 2 folders needed for mongodb : `db` & `logs`

## SetUp

- Delete all images : `docker rmi -f $(docker images -a -q)` - *optional*
- Delete containers : `docker rm fx_mongo_database fx_nginx fx_php_fpm` **names found in `docker-compose.yml`, use `docker ps -a` to check if name of containers exist** - *optional*
- Chanage folders rights : `chmod 777 docker/mongodb/db/ docker/mongodb/logs/``
- Build application : `docker-compose up --build`
 
## Go live

- Install NGROK
- use `docker ps -a` to see PORTS
- Start NGROK : `ngrok http 8881`