# LARACONDOMINUM

This is a project based on managing entry and exit of visitors and residents to condominium ordinances

## Commands to start the project

- docker-compose up -d
- yarn migrations

## Stop / remove all Docker containers

### One liner to stop / remove all of Docker containers:

- docker stop $(docker ps -a -q)
- docker rm $(docker ps -a -q)

### Get into a Docker container's shell

- docker-compose exec [service] bash
-- Ex: docker-compose exec php-fpm bash

