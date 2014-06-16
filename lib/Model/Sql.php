<?php
//starting information for connecting/dealing with the database

class Model_Sql
{
    protected $dbHandler;
    //protect $result;

    function __construct($dbHandler)
    {
       $this->dbHandler = $dbHandler;
    }
    //need db information prior to setting this up
    function connect($server, $username, $password, $database)
    {
        $this->dbHandler = mysql_connect($server, $username, $password);
    }

   //disconnect from database
    function disconnect()
    {
        //@mysql_close will suppress error msgs
        if(mysql_close($this->dbHandler) !=0)
        {
            echo "server closed";
            return 1;
        }
        else
        {
            echo "error";
            return 0;
        }
    }

    function selectAll()
    {
        //mysql table names in `tic marks`
        $query = 'SELECT * FROM `'.$this->table.'`';
        return $this->query($query);
    }

    function select($id)
    {
        //select all from table where id
        $query = 'SELECT * FROM `'.$this->table.'` WHERE `id`
        = \' '.mysql_real_escape_string($id).'\'';
        return $this->query($query);
    }





}