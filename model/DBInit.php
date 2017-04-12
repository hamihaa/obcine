<?php
/**
 * Created by PhpStorm.
 * User: Miha
 * Date: 18-Oct-16
 * Time: 16:53
 */


class DBInit {
    private static $host = "localhost";
    private static $user = "id167260_obcine";
    private static $password = "obcine123";
    private static $schema = "id167260_isvu";
    private static $instance = null;
    private static $api = "AIzaSyAxkqy69pNnN-zuRMhSMmCih8oKpf8YXcA";
    private function __construct() {

    }

    private function __clone() {

    }

    /**
     * Returns a PDO instance -- a connection to the database.
     * The singleton instance assures that there is only one connection active
     * at once (within the scope of one HTTP request)
     *
     * @return PDO instance
     */
    public static function getInstance() {
        if (!self::$instance) {
            $config = "mysql:host=" . self::$host
                . ";dbname=" . self::$schema;
            $options = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_PERSISTENT => true,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            );
            self::$instance = new PDO($config, self::$user, self::$password, $options);
        }
        return self::$instance;
    }
}