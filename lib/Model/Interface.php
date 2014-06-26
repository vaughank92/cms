<?php

class Model_Interface
{
    //interface for models needs to connect to the database so extend DB class
    protected $model;

    function __construct()
    {
        //echo " Model_Interface";
    }

    public function displayInformation($query)
    {
        $dbConnection = Model_Db::getInstance();

        //checks the username and password against the database from the specified table
        $queryResults = mysqli_query($dbConnection, $query);

        //echos the results of the query
        // field: value
       /* while($rows = mysqli_fetch_assoc($queryResults))
        {
            foreach($rows as $field => $val)
            {
                echo "<br/>" ."$field: $val ";
            }
        }*/

        return $queryResults;
    }

    public function alterInformation($query)
    {
        $dbConnection = Model_Db::getInstance();

        $queryResults = mysqli_query($dbConnection, $query);

        //checks to how many rowsaffected by query
        //if 0 then there was no change
        $rowsAffected = mysqli_affected_rows($dbConnection);

        //echo " affected: " . $rowsAffected;
        if($rowsAffected == 0)
        {
            echo " Invalid query ";
        }
        else
        {
            echo " Valid ";
        }
    }

    public function basicPrint($query)
    {
        while($rows = mysqli_fetch_assoc($query))
        {
            foreach($rows as $field => $val)
            {
                echo "<br/>" ."$field: $val ";
            }
        }
    }

}
