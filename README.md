# Docker, MongoDB (GUI) & PHP on AWS C9

- All configs regarding building the docker container is in `docker` folder
- 2 files needed for mongodb : `Docker` & `mongod.conf` - **Important settings in mongod.conf (bindIp, dbPath, path)**
- 2 folders needed for mongodb : `db` & `logs`
 
## Resources

- mongo-gui (Viewing MongoDB) - https://www.npmjs.com/package/mongo-gui

## SetUp

- Delete all images : `docker rmi -f $(docker images -a -q)` - *optional*
- Delete containers : `docker rm fx_mongo_database fx_nginx fx_php_fpm` **names found in `docker-compose.yml`, use `docker ps -a` to check if name of containers exist** - *optional*
- Change folders rights : `chmod 777 docker/mongodb/db/ docker/mongodb/logs/`
- Build application : `docker-compose up --build`
 
## App settings

- In php file, connecting to mongoDB : `(new MongoDB\Client('mongodb://myuser:docker@172.19.0.1:27017'))->mydb;`, *where most settings is in docker-compose.yml file & IP is from **fx_nginx***

 
## Go live

- Install NGROK
- use `docker ps -a` to see PORTS

## Start application

- Start docker by `docker-compose up`
- Start NGROK (App) by `ngrok http 8881` *where 8881 is port*

## Start Mongo GUI

- After containers are UP, Start NGROK (Mongo GUI) by `nngrok http 4321` *where 4321 is port*
