# Project Title

This is Repo based on official laravel repo, with adding extra files for easy docker based setup

## Getting Started

```
git clone git@github.com:MabaKalox/maba_docker_laravel.git
```

### Prerequisites

docker
https://docs.docker.com/get-docker/

docker-compose (by default installed with docker on non linux hosts, but better check)
https://docs.docker.com/compose/install/

allow not root user use docker
https://docs.docker.com/engine/install/linux-postinstall/

### Installing

Go to project Directory
```
cd ./maba_docker_laravel
```

Install laravel
```
docker run --rm -v $(pwd):/app --user $UID:$GID composer install
```

Copy example environment file (optionally - modify)
```
cp .env.example .env
```

Build docker images

```
cd ./maba_docker_laravel
docker-compose build
```

## Running Dev

```
docker-compose up
```

access server on: http://localhost

optionally: connect to database on localhost:3306 (base credentials in docker-compose.yml)

## Acknowledgments

* Hat tip to Laravel, NGINX, Docker developers
* Inspiration
* Laravel github: https://github.com/laravel/laravel
