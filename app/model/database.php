<?php

    define('DB_HOST', 'login');
    define('DB_NAME', 'login');
    define('DB_CHARSET', 'utf8');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');

        try {
            $database = new PDO("mysql:host=" . DB_HOST . "; charset=" . DB_CHARSET . "; dbname=" . DB_NAME,
                DB_USER, DB_PASSWORD);
            $database->query("SET CHARACTER SET utf8");
            $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
?>