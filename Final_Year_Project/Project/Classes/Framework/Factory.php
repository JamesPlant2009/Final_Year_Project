<?php

namespace Framework;
/**
 * Factory.php
 * PHP web application to demonstrate how databases are accessed securely
 */
class Factory
{
    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    /**
     * build any object and return a resource handle to the object
     */
    public static function buildObject($class)
    {
        $object = new $class();
        return $object;
    }

    public static function createDatabaseWrapper()
    {
        $database = Factory::buildObject('DatabaseWrapper');
        $connection_parameters = getPdoDatabaseConnectionDetails();
        $database->setConnectionSettings($connection_parameters);
        $database->connectToDatabase();
        return $database;
    }
}
