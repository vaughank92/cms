<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/17/14
 * Time: 2:54 PM
 */


class Model_Front_Page extends Model_Interface{

    public function __construct()
    {
        echo " Model_Front_Page ";
    }

    public function testCall()
    {
        $query = "SELECT * FROM admin";

        //all printed in the Model_interface at the moment
        $results = Model_Interface::displayInformation($query);
    }
/*
    public function displayInformation()
    {
        $dbConnection = Model_Db::getInstance();

        //pass in as a param from other functions?
        $query = "SELECT * FROM admin";

        //$results = $dbConnection->query($query);

        //checks the username and password against the database from the specified table
        $queryResults = mysqli_query($dbConnection, $query);

        //echos the results of the query
        // field: value
        while($rows = mysqli_fetch_assoc($queryResults))
        {
            foreach($rows as $field => $val)
            {
                echo "<br/>" ."$field: $val ";
            }
        }
    }*/

} 