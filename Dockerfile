FROM wordpress:latest
ARG dbhost
ARG dbname
ARG dbuser
ARG dbpassword
ENV DB_HOST $dbhost
ENV DB_NAME $dbname
ENV DB_USER $dbuser
ENV DB_PASSWORD $dbpassword
COPY . /var/www/html
