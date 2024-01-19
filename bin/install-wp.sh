#!/bin/bash

# TODO: add error handling

# source environment variables
source .env

# check if root docker-compose directory
if [ ! -f docker-compose.yml ]; then
    echo "Please run this script from the root directory"
    exit 1
fi

# print install message
echo "Giddy up! Installing WordPress into 'wp' directory..."

# download and install wordpress
wp core download --path=wp
wp core install \
    --path=wp \
    --url=0.0.0.0 \
    --title="WordPress" \
    --admin_user=admin \
    --admin_password=passpass \

# print install success message
echo "We're ready to rock n' roll! WordPress installation complete!"

# print config setup message
echo "Setting up WordPress config file..."

# setup wordpress config file
wp config create \
    --path=wp \
    --dbname="${DB_NAME}" \
    --dbuser="${DB_USER}" \
    --dbpass="${DB_PASSWORD}" \
    --dbhost=database:3306 \
    --dbprefix="${DB_TABLE_PREFIX}" \
    --skip-check \

# print config setup success message
echo "Awesome opossum! WordPress config file setup complete!"