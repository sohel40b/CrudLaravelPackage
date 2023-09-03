# Laravel Crud package

To Install this package run

    composer require Sohel40b/Crud

Add Service provider from <b>config/app.config</b>

    'providers' => [
        ...
        Sohel40b\Crud\CrudServiceProvider::class,
    ],

Migrate all table which are require

    php artisan migrate
