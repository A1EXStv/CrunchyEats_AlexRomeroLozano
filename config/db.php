<?php
require_once "config.php"; // <<< Esto es clave

class DBConnection {
    public static function connect() {
        $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

        if ($connection->connect_error) {
            die("Error de conexión: " . $connection->connect_error);
        }

        $connection->set_charset("utf8");
        return $connection;
    }
}
