#!/bin/bash

# TODO: Add error handling

# check the script is run from the project root
if [ ! -f "docker-compose.yml" ]; then
    echo "Please run this script from the project root"
    exit 1
fi

# enter the nginx certs directory
cd .docker/nginx/certs

# check if openSSL is installed
if ! [ -x "$(command -v openssl)" ]; then
    # ask if okay to install openSSL
    read -p "OpenSSL is not installed. Would you like to install it? (y/n) " -n 1 -r
    echo
    if [[ $REPLY =~ ^[Yy]$ ]]; then
        # install openSSL
        sudo apt-get install openssl
    else
        echo "OpenSSL is required to create a self-signed certificate"
        exit 1
    fi
fi

# use openSSL to create a self-signed certificate and key
echo "Creating self-signed certificate for nginx..."
sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout nginx-selfsigned.key -out nginx-selfsigned.crt

# Return to project root
cd ../../../