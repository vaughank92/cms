<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/12/14
 * Time: 4:29 PM
 */

class Controller_Admin_Pagelist extends Controller_Abstract{
    //controller to handle the list of pages for the user

    private $model;
    public $pages = array();
    //call Controller_Admin_Abstract to check log in?

    public function __construct($model)
    {
        //change PageListModel to form to naming convention
        $this->model = $model->newModel(new PageListModel());
    }

    //needed to fetch pageId?
    public function getPageInfo($pageId)
    {

    }

    public function listAll($userName, $pages)
    {
        //Another way to do this?
        //Proper location to do this?---Moved to model
        $userPages = array();
        while($user = current($pages))
        {
            if($user == $userName)
            {
                $foundPage = key($pages);
                array_push($userPages, $foundPage);
            }
            next($pages);
        }
        return $userPages;

    }

    public function viewPage($pageId)
    {
        //send pageId to the model to pull the data
        //$this->model->disPage = $pageId;
    }

    public function deletePage($pageId, $pages)
    {
        //mysql's id = pageId, mysql starts at 1, indexing starts at 0
        //unset($pages[$pageId + 1]);

        if(array_key_exists($pages, $pageId))
        {
            unset($pages[$pageId + 1]);
            $this->model->delPage = $pageId;
        }
        else
        {
            echo "can not remove what is not there ";
        }
    }

    public function editPage($pageId)
    {
        //$this->model->
    }

    public function addPage($pageId)
    {

    }
}