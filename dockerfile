FROM php:7.4-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
EXPOSE 8000/tcp
CMD [ "php", "./index.php" ]