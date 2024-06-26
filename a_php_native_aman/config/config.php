<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'mydatabase');
define('DB_USER', 'myuser');
define('DB_PASS', 'mypassword');

// Autoloader
spl_autoload_register(function ($class) {
    $path = '../src/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});
?>
