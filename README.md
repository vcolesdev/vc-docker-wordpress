# Custom Docker WordPress Project

## Author

By: Vanessa Coles <webdev@vcoles.com>

## Description

This is a custom WordPress project using Docker.  This is a work in progress!

## Features

* Docker & Docker Compose
* WordPress
* MYSQL Database
* Redis Cache

## Installation

1. Clone this repository to your local machine.
2. Run `docker-compose up -d` from the project root to pull files and build images.
3. Run `bash ./bin/install-wp.sh` from the project root to install WordPress.
4. Run `docker-compose up -d` to save your local changes to the container.
5. Navigate to `0.0.0.0` in your browser to view the site.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.