#Timberwolf WP 2019
#Getting started
After cloning this repo you will need a few things to get going.
This repository contains a docker-compose file. This defines the local development environment.
If you don't have docker installed, get it here https://www.docker.com/.

To spin up the docker containers, cd into the project directory and execute "docker-compose up -d"
Once the containers are spun up, the wordpress site will be accessible on localhost:9000 and phpmyadmin on port 8080.

When the containers are initilized a sample data base will be loaded from the dep/mysql directory. If you want to keep changes made to the database during development. Use phpmyadmin to back up the data before spinning down the containers.

#Working with style sheets
To compile the SCSS run "npm install" to get the gulp dependencies.
Once those dependencies are installed, run "gulp" to watch and compile the SCSS.

Note: This compile step auto prefixes and minifies the SCSS files and writes it to the root theme directory as style.css

