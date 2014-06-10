<?php

class Model_Interface
{
    //interface for models needs to connect to the database so extend DB class
    protected $model;

    function __construct()
    {
        $this-> connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        //need to be defined
    }

}
