<?php

return [
    /*
    |--------------------------------------------------------------------------
    | View Paths
    |--------------------------------------------------------------------------
    | Paths where the system will look for views.
    */
    'view_paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled Views Path
    |--------------------------------------------------------------------------
    | The directory where compiled views are stored.
    */
    'compiled_views' => env(
        'VIEW_COMPILED_PATH',
        storage_path('framework/views')
    ),
];