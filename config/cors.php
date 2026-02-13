<?php

return [

    'paths' => ['api/*', 'sanctum/csrf-cookie', 'broadcasting/auth'],

    'allowed_methods' => ['*'],

    'allowed_origins' => array_filter([
        // Localhost - development
        'http://localhost:5173',
        'http://localhost:3000',
        'http://localhost:5200',
        'http://127.0.0.1:5173',
        'http://127.0.0.1:3000',
        // Production
        'https://riddlelab.world',
        'https://www.riddlelab.world',
        'https://api.riddlelab.world',
    ]),

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,

];
