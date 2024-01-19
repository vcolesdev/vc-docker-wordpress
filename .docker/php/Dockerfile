FROM wordpress:6.3.1-php8.2-fpm-alpine as wordpress

# Set environment variables for WP
ENV WORDPRESS_DB_HOST database:3306
ENV WORDPRESS_DB_USER wpdb_admin
ENV WORDPRESS_DB_PASSWORD passpass
ENV WORDPRESS_DB_NAME wpdb_default

# Set the working directory
WORKDIR /var/www/wp

# Check for WPCLI installation in the container
RUN if [ ! -f /usr/local/bin/wp ];  \
    then \
      curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
      chmod +x wp-cli.phar && \
      mv wp-cli.phar /usr/local/bin/wp; \
    fi

# Copy WordPress files to the working directory
COPY ./wp /var/www/wp

# Loop through wp-content themes, plugins, uploads, and copy to host
RUN for dir in /var/www/wp/wp-content/themes/*; do \
        if [ -d "$dir" ]; then \
            theme=$(basename "$dir"); \
            echo "Copying theme $theme to host"; \
            cp -r "$dir" ./app/resources/themes; \
        fi; \
    done; \
    for dir in /var/www/wp/wp-content/plugins/*; do \
            if [ -d "$dir" ]; then \
                plugin=$(basename "$dir"); \
                echo "Copying plugin $plugin to host"; \
                cp -r "$dir" ./app/resources/plugins; \
            fi; \
        done; \
    for dir in /var/www/wp/wp-content/uploads/*; do \
        if [ -d "$dir" ]; then \
            upload=$(basename "$dir"); \
            echo "Copying upload $upload to host"; \
            cp -r "$dir" ./app/resources/uploads; \
        fi; \
    done