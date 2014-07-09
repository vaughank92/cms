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

        //var_dump($queryResults);
        return $queryResults;
    }

    public function checkInformation($query)
    {
        $dbConnection = Model_Db::getInstance();
        $queryResults = mysqli_query($dbConnection, $query);
        $rows = mysqli_num_rows($queryResults);
        var_dump($rows);
        return $rows;
    }

    public function alterInformation($query)
    {
        $dbConnection = Model_Db::getInstance();

        $queryResults = mysqli_query($dbConnection, $query);
        $error = mysqli_error($dbConnection);
        //checks to how many rowsaffected by query
        //if 0 then there was no change
        $rowsAffected = mysqli_affected_rows($dbConnection);
        //var_dump($rowsAffected);
        //echo " affected: " . $rowsAffected;

        if($rowsAffected == 0)
        {
            echo " Invalid query ";
            return false;
        }
        else
        {
            echo " Valid query ";
            return $error;
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

    public function getVal($query)
    {
        while($rows = mysqli_fetch_assoc($query))
        {
            foreach($rows as $field => $val)
            {
                //echo "<br/>" ."$field: $val ";
                return $val;
            }
        }
    }

    public function getId($userName)
    {
        $dbConnection = Model_Db::getInstance();
        $query = "SELECT userId FROM users WHERE userName = '$userName'";
        $queryResults = mysqli_query($dbConnection, $query);

        while($rows = mysqli_fetch_assoc($queryResults))
        {
            foreach($rows as $field => $val)
            {
                //echo $val;
                return $val;
            }
        }
    }


}
