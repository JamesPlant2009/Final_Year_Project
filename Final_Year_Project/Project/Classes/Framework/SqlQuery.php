<?php

namespace Framework;
/**
 * SqlQuery.php
 * PHP web application to demonstrate how databases are accessed securely
 *This class groups together all the SQL queries that are used within the application
 * @package cryptoshow
 */
class SqlQuery
{

    public function __construct()
    {
    }

    public function __destruct()
    {
    }

/**
    public static function queryRetrievePassword(): string
    {
        $sql_query_string = 'SELECT user_hashed_password FROM registered_user WHERE user_nickname=:user';
        return $sql_query_string;
    }

    public static function queryGetAdministratorStatus(): string
    {
        $sql_query_string = 'SELECT user_admin FROM registered_user WHERE user_nickname=:user';
        return $sql_query_string;
    }
 */
}






