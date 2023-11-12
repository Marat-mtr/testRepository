FROM php:8.2-cli
RUN apt-get update
COPY . /
WORKDIR /
CMD [ "php", "./index.php" ] 