<?php

class Model_Interface
{
    //interface for models needs to connect to the database so extend DB class
    protected $model;

    function __construct()
    {
        $database = new Model_Sql($dbHandler);
        $connecting = Model_Sql::connect(localhost, 'root', 'root', 'testing');
        //need to be defined
    }

}
