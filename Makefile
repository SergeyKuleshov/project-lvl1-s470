install:
	composer install
lint:
	composer run-script phpcs -- --standart=PSR12 src bin
