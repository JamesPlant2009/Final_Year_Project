<?php

class SqlQuery
{

    public function __construct()
    {
    }
//matrix page

    public static function queryGetDatesFromID()
    {
        $sql_query_string = ' SELECT `date` FROM q_a WHERE user_id =:user_id AND training_id = :training_id';
        return $sql_query_string;

    }

    public static function queryGetCourseFromID()
    {
        $sql_query_string = 'SELECT `course` FROM training WHERE training_id = :training_id';
        return $sql_query_string;
    }



    //END OF MATRIX PAGE

    public static function queryRetrievePassword()
    {
        $sql_query_string = 'SELECT user_hashed_password FROM user WHERE user_email =:email';
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

    public static function queryUpdateAnswer() : string
    {
        $sql_query_string ='UPDATE q_a SET training_id =:training_id, user_id=:user_id,question_1 = :question_1, question_2 = :question_2, `date` = :date WHERE user_id = :user_id AND training_id = :training_id';
        return $sql_query_string;
    }

    public static function queryAnswerExists(): string
    {
        $sql_query_string ='SELECT * FROM q_a WHERE training_id = :training_id AND user_id = :user_id';
        return $sql_query_string;
    }


    public function __destruct()
    {
    }

}