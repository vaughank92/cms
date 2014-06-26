<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/17/14
 * Time: 2:53 PM
 */

class Model_Admin_Pagelist extends Model_Interface{

    //requires logged in status

    //list all pages
    //delete page
    //edit page
    //display page
    //add page


    //will display all pages from the table
    //admin use only
    public function allPages()
    {
        $query = "SELECT * FROM pages";
        $results = self::displayInformation($query);
    }

    //delete page: admin and user only
    public function deletePage($pageId)
    {
        $query = "DELETE FROM pages WHERE pageId = '$pageId'";
        //$queryTwo = "SELECT * FROM pages";

        $results = self::alterInformation($query);
        //$display = self::displayInformation($queryTwo);
    }

    //admin and user only
    public function editPage()
    {

    }

    //display based on pageId
    //all use
    public function displayPage($pageId)
    {
        $query = "SELECT * FROM pages WHERE pageId = '$pageId'";
        $results = self::displayInformation($query);
    }

    //is not caps sensitive userAdmin == useradmin
    //display the pages based on userName
    //allow for user to display own pages and for search
    public function displayUserPages($userName)
    {
        echo "displayUserPages";
        echo $userName;
        $query = "SELECT * FROM pages WHERE userName = '$userName'";
        $result = self::displayInformation($query);

        return $result;
    }

    //allow user to add page
    public function addPage($userName, $title)
    {
        $query = "INSERT INTO pages VALUES
            (' ', '$userName', '$title')";
        //$queryTwo = "SELECT * FROM pages";

        $results = self:: alterInformation($query);
        //$display = self::displayInformation($queryTwo);
    }
} 