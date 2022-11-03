FROM composer:latest AS composer
FROM php:8.1.11-cli
COPY --from=composer /usr/bin/composer /usr/bin/composer
WORKDIR /usr/src/
RUN apt update && \
apt install -y git && \
rm -rf /var/lib/apt/lists
WORKDIR /usr/src/scn-jenkins-demo
COPY . /usr/src/scn-jenkins-demo
RUN [ "composer", "install"]
CMD [ "php", "./index.php" ]
