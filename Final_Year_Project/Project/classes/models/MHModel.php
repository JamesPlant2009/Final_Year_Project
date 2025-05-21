<?php

class MHModel
{

    private $user_id;

    private $training_id = 10;
    private $database_handle;
    private $question_1;
    private $question_2;
    private $date;





    public function setDatabaseHandle($database_handle)
    {
        $this->database_handle = $database_handle;
    }



    public function setUserId(){
        $sql_query_string = SqlQuery::queryGetUserIDFromEmail();
        $sql_query_parameters = [':email' => $_SESSION['email']];
        $this->database_handle->safeQuery($sql_query_string, $sql_query_parameters);
        $this->user_id = $this->database_handle->fetchColumn();

    }

    public function setTraining_id()
    {
        $this->training_id = 10;

    }



    public function setQuestion1(string $question_1)
    {
        $this->question_1 = $question_1;


    }
    public function setQuestion2(string $question_2)
    {
        $this->question_2 = $question_2;


    }
    public function setDate(string $date)
    {
        $this->date = $date;

    }

    public function modelHandleAnswer(){
        $sql_query_string = SqlQuery::queryHandleAnswer();
        $sql_query_parameters = [':training_id' => $this->training_id, ':user_id' => $this->user_id,':question_1' => $this->question_1, ':question_2' => $this->question_2, ':date' => $this->date,];
        $this->database_handle->safeQuery($sql_query_string, $sql_query_parameters);

    }

    public function modelUpdateAnswer(){

        $sql_query_string = SqlQuery::queryUpdateAnswer();
        $sql_query_parameters = [':training_id' => $this->training_id, ':user_id' => $this->user_id,':question_1' => $this->question_1, ':question_2' => $this->question_2, ':date' => $this->date,];
        $this->database_handle->safeQuery($sql_query_string, $sql_query_parameters);
    }

    public function checkIfAnswerExists()
    {
        $sql_query_string = SqlQuery::queryAnswerExists();
        $sql_query_parameters = [':training_id' => $this->training_id, ':user_id' => $this->user_id];
        $this->database_handle->safeQuery($sql_query_string, $sql_query_parameters);
        $result = $this->database_handle->countRows();
        echo $result;
        return $result;

    }











}