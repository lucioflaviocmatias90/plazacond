# LARACONDOMINUM

This is a project based management condominios

## Commands principles

- docker-compose up -d

## Stop / remove all Docker containers

### One liner to stop / remove all of Docker containers:

- docker stop $(docker ps -a -q)
- docker rm $(docker ps -a -q)

### Get into a Docker container's shell

- docker-compose exec [service] bash
-- Ex: docker-compose exec php-fpm bash

