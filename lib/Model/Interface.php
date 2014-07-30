<?php

class Model_Interface
{
    //interface for models needs to connect to the database so extend DB class


    function __construct()
    {
        //echo " Model_Interface";
    }

    public function displayInformation($query)
    {
        $dbConnection = Model_Db::getInstance();

        //checks the username and password against the database from the specified table
        //echo gettype($queryResults);
        //return $this->basicPrint($queryResults);
        //$queryResults = mysqli_query($dbConnection, $query);
        //return $queryResults;

        $queryResults = $dbConnection->prepare($query);
        $queryResults->execute();

        //$queryResults = $dbConnection->query($query);
        return $queryResults;

    }

    public function checkInformation($query)
    {
        $dbConnection = Model_Db::getInstance();
        //$queryResults = mysqli_query($dbConnection, $query);
        $queryResults = $dbConnection->prepare($query);
        $queryResults->execute();

        //$rows = mysqli_num_rows($queryResults);
        $rows = $queryResults->fetch();
        //var_dump($rows);
        return $rows;
    }

    public function alterInformation($query)
    {
        $dbConnection = Model_Db::getInstance();

        //$queryResults = mysqli_query($dbConnection, $query);
        //$error = mysqli_error($dbConnection);
        //checks to how many rowsaffected by query
        //if 0 then there was no change
        //$rowsAffected = mysqli_affected_rows($dbConnection);
        //var_dump($rowsAffected);
        //echo " affected: " . $rowsAffected;

        $queryResults = $dbConnection->prepare($query);

        $queryResults->execute();

        $rowsAffected = $queryResults->rowCount();
        //var_dump($rowsAffected);

        if($rowsAffected == 0)
        {
            //echo " Invalid query ";
            return false;
        }
        else
        {
            echo " Valid query ";
            //return $error;
        }
    }

    public function basicPrint($queryResults)
    {
        $returning = array();
        //while($rows = mysqli_fetch_assoc($queryResults))
        while($rows = $queryResults->fetchAll())
        {
            $returning[] = $rows;
        }
        return $returning;
    }

    public function getVal($query)
    {
        //while($rows = mysqli_fetch_assoc($query))
        while($rows = $query->fetchAll())
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
        $query = $dbConnection->prepare("SELECT userId FROM users WHERE userName = :userName");
        //$queryResults = mysqli_query($dbConnection, $query);
        $queryResults = $query->execute(array('userName' => $userName));
        //while($rows = mysqli_fetch_assoc($queryResults))

        while($rows = $query->fetchAll())
        {
            foreach($rows as $field => $val)
            {
                return $val[0];
            }
        }
    }

/*    public function getTheme($userId)
    {
        $dbConnection = Model_Db::getInstance();
        $query = $dbConnection->prepare("SELECT theme FROM users WHERE userId = :userId");
       // $userId = self::getId($userName);
        $queryResults = $query->execute(array('userId' => $userId));

        while($rows = $query->fetchAll())
        {
            foreach($rows as $field => $val)
            {
                var_dump($val[0]);
                return $val[0];
            }
        }
    }*/


}
