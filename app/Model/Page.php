<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 7/9/14
 * Time: 4:17 PM
 */


class Model_Page extends Model_Interface{

    public function displayPage($pageId)
    {
        $query = "SELECT * FROM pages WHERE pageId = '$pageId'";
        $variables = array(':pageId' => $pageId);

        return self::displayInformation($query, $variables);
    }

    public function updatePage($pageId, $title, $content)
    {
        $query = "UPDATE pages SET title = :title, content = :content WHERE pageId = :pageId";
        $variables = array(':title' => $title, ':content' => $content, ':pageId' => $pageId);
        $results = self::alterInformation($query, $variables);
        var_dump($results);
    }

/*    public function changeTheme($userId, $theme)
    {
        $query = "UPDATE users SET theme = '$theme' WHERE userId = '$userId'";
        $results = self::alterInformation($query);
        var_dump($results);
    }*/

    public function searchPage($search)
    {

        $edit = '%'.$search.'%';
        $query = "SELECT * FROM pages WHERE title LIKE :search";
        $variables = array(':search' => $edit);

        $results = self::displayInformation($query, $variables);
        return $results;
    }

    public function searchTitle()
    {
        $array = array();
        $query = "SELECT title FROM pages";
        $variables = array();
        $results = self::displayInformation($query, $variables);
        $print = self::basicPrint($results);

        foreach($print[0] as $value)
        {
            $safe = addslashes($value['title']);
            array_push($array, $safe);
        }
        return $array;
    }

    public function allPages()
    {
        $query = "SELECT * FROM pages";
        $variables = array();

        return self::displayInformation($query, $variables);
    }

    public function deletePage($pageId)
    {
        $query = "DELETE FROM pages WHERE pageId = '$pageId'";
        $variables = array(':pageId'=>$pageId);
        $results = self::alterInformation($query, $variables);
    }

   /*public function displayPage($pageId)
   * {
    * $query = "SELECT * FROM pages WHERE pageId = '$pageId'";
    * $results = self::displayInformation($query);
    * return results;
    * }
    */

    public function displayUserPages($userId)
    {
        $query = "SELECT * FROM pages WHERE userId = :userId";
        $variables = array(':userId' => $userId);

        $results = self::displayInformation($query, $variables);
        return $results;
    }

    public function addPage($userId, $userName, $title, $content)
    {
        $query = "INSERT INTO pages VALUES (' ', :userId, :userName, NULL, '', :title , :content)";
        $variables = array(':userId' => $userId, ':userName' => $userName, ':title' => $title, ':content' =>$content);
        $results = self::alterInformation($query, $variables);
    }
} 