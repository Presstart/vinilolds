<?php
// HTTP
define('HTTP_SERVER', 'http://vinilolds.com.br/');

// HTTPS
define('HTTPS_SERVER', 'https://vinilolds.com.br/');

// DIR
define('DIR_APPLICATION', '/var/www/html/vinilolds.com.br/web/catalog/');
define('DIR_SYSTEM', '/var/www/html/vinilolds.com.br/web/system/');
define('DIR_IMAGE', '/var/www/html/vinilolds.com.br/web/image/');
define('DIR_STORAGE', '/var/www/html/vinilolds.com.br/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'lojavinilolds.mysql.uhserver.com');
define('DB_USERNAME', 'viniloldsadmin');
define('DB_PASSWORD', '@Vinil1');
define('DB_DATABASE', 'lojavinilolds');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');