PHP=$(shell which php)
BOWER=$(shell which bower)
HOST=localhost
PORT=8080

install:
	curl -s https://getcomposer.org/installer | php
	${PHP} composer.phar install
	$(BOWER) install

start:
	${PHP} -S ${HOST}:${PORT} -t public_html
