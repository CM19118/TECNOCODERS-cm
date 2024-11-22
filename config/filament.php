<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Paneles de Filament
    |--------------------------------------------------------------------------
    |
    | Define los paneles disponibles para Filament. Cada panel tiene su propia
    | configuración como ID, rutas y middleware.
    |
    */

    'panels' => [
        'default' => [
            'id' => 'dashboard',
            'path' => 'dashboard',
            'middleware' => ['web'], // Middleware predeterminado de Laravel.
            'auth' => [
                'login' => 'filament.dashboard.auth.login', // Ruta de inicio de sesión.
                'register' => 'filament.dashboard.auth.register',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Configuración de Broadcasting
    |--------------------------------------------------------------------------
    |
    | Configuración de Laravel Echo para notificaciones en tiempo real.
    |
    */

    'broadcasting' => [
        // Configuración opcional para Echo.
    ],

    /*
    |--------------------------------------------------------------------------
    | Disco de Almacenamiento
    |--------------------------------------------------------------------------
    |
    | Define el disco de almacenamiento predeterminado que usa Filament para
    | guardar archivos subidos.
    |
    */

    'default_filesystem_disk' => env('FILAMENT_FILESYSTEM_DISK', 'public'),

    /*
    |--------------------------------------------------------------------------
    | Rutas y Middleware Globales
    |--------------------------------------------------------------------------
    |
    | Configuración adicional para las rutas y middleware utilizados por Filament.
    |
    */

    'assets_path' => null,
    'cache_path' => base_path('bootstrap/cache/filament'),
    'livewire_loading_delay' => 'default',

    /*
    |--------------------------------------------------------------------------
    | Redirección después de Autenticación
    |--------------------------------------------------------------------------
    |
    | Configura a dónde se redirige al usuario después de iniciar/cerrar sesión.
    |
    */

    'auth' => [
        'redirect' => [
            'login' => 'dashboard', // Redirigir al dashboard después del login.
            'logout' => 'login',    // Redirigir al login después del logout.
        ],
    ],

];
