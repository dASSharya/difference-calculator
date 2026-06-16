lint:
	composer run lint

test:
	composer run test

run:
	php bin/gendiff tests/fixtures/file1.json tests/fixtures/file2.json

install:
	composer install
