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

    public function allPages()
    {
        $query = "SELECT * FROM pages";
        $results = self::displayInformation($query);
    }

    public function deletePage($pageId)
    {
        $query = "DELETE FROM pages WHERE pageId = '$pageId'";
        //$queryTwo = "SELECT * FROM pages";

        $results = self::alterInformation($query);
        //$display = self::displayInformation($queryTwo);
    }

    public function editPage()
    {

    }

    //display based on pageId
    public function displayPage($pageId)
    {
        $query = "SELECT * FROM pages WHERE pageId = '$pageId'";
        $results = self::displayInformation($query);
    }

    //is not caps sensitive userAdmin == useradmin
    public function disUserPages($userName)
    {
        $query = "SELECT * FROM pages WHERE userName = '$userName'";
        $result = self::displayInformation($query);
    }

    public function addPage($userName, $title)
    {
        $query = "INSERT INTO pages VALUES
            (' ', '$userName', '$title')";
        //$queryTwo = "SELECT * FROM pages";

        $results = self:: alterInformation($query);
        //$display = self::displayInformation($queryTwo);

    }


} 