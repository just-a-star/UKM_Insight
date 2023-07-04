<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel Permission Models
    |--------------------------------------------------------------------------
    |
    | This option allows you to specify the Eloquent models that should be used
    | to retrieve permissions and roles. You can specify any model here that
    | extends the appropriate Spatie model provided by this package.
    |
    */

    'models' => [
        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * Eloquent model should be used to retrieve your permissions. Of course, it
         * is often just the "Permission" model but you may use whatever you like.
         *
         * The model you want to use as a Permission model needs to implement the
         * `Spatie\Permission\Contracts\Permission` contract.
         */

        'permission' => Spatie\Permission\Models\Permission::class,

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * Eloquent model should be used to retrieve your roles. Of course, it
         * is often just the "Role" model but you may use whatever you like.
         *
         * The model you want to use as a Role model needs to implement the
         * `Spatie\Permission\Contracts\Role` contract.
         */

        'role' => Spatie\Permission\Models\Role::class,

        /*
         * When using the "HasPermissions" trait from this package, we need to know which
         * Eloquent model should be used to retrieve your roles. Of course, it
         * is often just the "Role" model but you may use whatever you like.
         *
         * The model you want to use as a Role model needs to implement the
         * `Spatie\Permission\Contracts\Role` contract.
         */

        'team' => App\Models\Team::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Database Connection for Migrations
    |--------------------------------------------------------------------------
    |
    | This option determines the database connection that will be used when
    | running the package migrations. You can specify any connection here
    | that is configured in your "database" configuration file.
    |
    */

    'database_connection' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Caching
    |--------------------------------------------------------------------------
    |
    | This option controls the caching of the permissions and roles. When enabled,
    | the package will cache the permissions and roles to reduce database
    | queries for performance improvement. You should only disable this
    | option in development mode or if you want to manually clear
    | the cache whenever the permissions or roles change.
    |
    */

    'cache' => [
        /*
         * This option controls whether the permissions and roles will be cached.
         */
        'enabled' => true,

        /*
         * This option determines the length of time, in minutes, that the
         * permissions and roles will be cached for.
         */
        'expiration_time' => 1440, // 24 hours
    ],

];