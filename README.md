# Docker PHP Starter Template

## Configuration
- PHP 8.0.2
- MySql 8.0

## Installation
```shell
composer create-project syedgalib/docker-php-starter my-project
```

## Initialization
Navigate to `docker` directory in the terminal and run
```shell
docker compose up -d
```

After running the command you should be able to open your project from the following url:

- Main App: http://localhost:8000
- phpMyAdmin: http://localhost:8080


## App Directory
Use `app` directory for project files.


## Exit 
To stop the application, navigate to `docker` directory in the terminal and run
```shell
docker compose down
```