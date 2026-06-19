run:
	php bin/gendiff tests/fixtures/file1.json tests/fixtures/file2.json
	
lint:
	composer run lint

test:
	mkdir -p build/logs
	vendor/bin/phpunit --coverage-filter src tests --coverage-clover build/logs/clover


install:
	composer install
