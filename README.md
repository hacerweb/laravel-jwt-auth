## Install

Create `.env` file and config DATABASE:

```bash
cp .env.example .env
```

Install library and gen key application, jwt:

```bash
composer update
composer install
php artisan key:generate
php artisan jwt:secret
```

Run migration: 

```bash
php artisan migrate
```

## Run

```bash
php artisan serve
```
