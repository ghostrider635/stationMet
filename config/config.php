<?php
    define('APP_NAME', 'Station mét"o');

    define('ENV', 'development');
    define('DEBUG', true);

    define('BASE_URL', 'http://localhost/stationMet/public');

    // Chemins importants
    define('ROOT_PATH', dirname(__DIR__));
    define('APP_PATH', ROOT_PATH . '/app');
    define('CONFIG_PATH', ROOT_PATH . '/config');
    define('PUBLIC_PATH', ROOT_PATH . '/public');
    define('VIEW_PATH', APP_PATH . '/views');
    define('ASSETS_URL', BASE_URL . '/assets');
    define('UPLOADS_PATH', PUBLIC_PATH . '/uploads');
    define('LOGS_PATH', ROOT_PATH . '/logs');

    date_default_timezone_set('Europe/Paris');
