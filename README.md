## Crud Laravel package

To Install this package run 

    composer require sohel40b/crud:dev-master

Add Service provider from <b>config/app.config</b>

    'providers' => [
        ...
        sohel40b\crud\CrudServiceProvider::class,
    ],

Migrate all table which are require and update .env then migrate

    php artisan migrate
    
Open this Route

    http://localhost:8000/todo
