<?php
/**
 * SqlQuery.php
 * PHP web application to demonstrate how databases are accessed securely
 *
 *This class groups together all the SQL queries that are used within the application
 *
 * @author CF Ingrams - cfi@dmu.ac.uk
 * @copyright De Montfort University
 *
 * @package petshow
 */

class SqlQuery
{

    public function __construct()
    {
    }

    public static function queryRetrievePassword()
    {
        $sql_query_string = 'SELECT user_hashed_password FROM user WHERE user_email =:email';
        return $sql_query_string;
    }

    public static function queryGetUserDetails()
    {
        $sql_query_string = 'SELECT user_first_name, user_last_name,role FROM user WHERE user_email =:user';
        return $sql_query_string;
    }

    public static function queryGetAdministratorStatus()
    {
        $sql_query_string = 'SELECT user_admin FROM user WHERE user_email=:email';
        return $sql_query_string;
    }

    public static function queryGetUserIDFromEmail()
    {
        $sql_query_string = ' SELECT user_id FROM user WHERE user_email =:email';
        return $sql_query_string;

    }

    public static function queryCreateUser() : string
    {
        $sql_query_string = 'INSERT INTO user (user_first_name, user_last_name, user_email, user_hashed_password, user_role) VALUES';
        $sql_query_string .= '(:user_first_name, :user_last_name, :email, :password, :role)';
        return $sql_query_string;
    }

    public static function querySelectEmail(){
        $sql_query_string  = 'SELECT COUNT(*) FROM user WHERE user_email = :user_email';
        return $sql_query_string;
    }


//NEED TO MAKE AN UPDATE VERSION OF THIS
    public static function queryHandleAnswer() : string
    {
        $sql_query_string = 'INSERT INTO q_a (training_id, user_id, question_1, question_2, date) VALUES';
        $sql_query_string .= '(:training_id, :user_id, :question_1, :question_2, :date)';
        return $sql_query_string;
    }

    public static function queryGetDateByUserAndTraining()
    {
        $sql_query_string = 'SELECT date FROM q_a WHERE user_id = :user_id AND training_id = :training_id';
        return $sql_query_string;
    }





    public function __destruct()
    {
    }

}