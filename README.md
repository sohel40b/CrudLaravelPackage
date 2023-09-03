# Laravel Crud package

<br><br>

To Install this package run

    composer require Sohel/Crud

Add Service provider from <b>config/app.config</b>

    'providers' => [
        ...
        Sohel\Crud\CrudServiceProvider::class,
    ],

Migrate all table which are require

    php artisan migrate
