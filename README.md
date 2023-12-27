## Sample: Big size file upload

Currently, it's a default Laravel installation with Filament installed.

### Setting up development environemnt

Clone the repository, then:
```
cp .env.example .env
composer install
php artisan key:generate
touch database/database.sqlite
php artisan migrate:fresh --seed
php artisan serve
```
