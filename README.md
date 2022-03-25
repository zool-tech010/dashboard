#### Let's get started
1. > `git clone https://github.com/msiddig93/april-newspaper.git`
1. > `cd april-newspaper`
1. > `composer install`
1. > `copy .env-example to .env`
1. > `php artisan key:generate` to generate new key
1. > `composer dump-autoload` to clean the cache
1. > `php artisan migrate --seed`
1. > with database seeder will create user with credential
1. > `email : admin@admin.com`
1. > `password : password`
1. > now run `php artisan serve` to start the server
2. > access the [dashboard](http://127.0.0.1:8000) `127.0.0.1:8000` as the default host:port
