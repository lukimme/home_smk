<?php

return [
    // Base URL for external API. Set via .env as API_BASE_URL
    // 'base_url' => env('API_BASE_URL', 'https://api.smkbudimuliapakisaji.sch.id'),
    'base_url' => env('API_BASE_URL', 'http://localhost:3005/'),
    // default timeouts for Guzzle requests (seconds)
    'timeout' => env('API_TIMEOUT', 5),
    'connect_timeout' => env('API_CONNECT_TIMEOUT', 3),

    // TAMBAHKAN ENDPOINTS DI BAWAH INI
    'endpoints' => [
        'formulir' => '/formulir',
        // Tambahkan endpoint lain jika needed
    ],
];