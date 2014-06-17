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
        $this->model = $model->newModel(new Model_Admin_Pagelist());
    }

    //needed to fetch pageId?
    public function getPageInfo()
    {
        $pageId = $this->_getParam('id');
        if($pageId)
        {
            $this->model->get('title');
            $this->model->get('content');
            $this->model->get('header');
            $this->model->get('footer');
        }
        else
        {
            echo "page does not exist";
        }
    }

    //array of all pages associated with particular username
    public function listAction($pages)
    {
        $userName = $this->_getParam('userName');
        //Another way to do this?
        //Proper location to do this?
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

    public function deleteAction($pageId, $pages)
    {
        //mysql's id = pageId, mysql starts at 1, indexing starts at 0
        //unset($pages[$pageId + 1]);

        if(array_key_exists($pages, $pageId))
        {
            unset($pages[$pageId + 1]);
            $this->model->delPage($pageId);
        }
        else
        {
            //pageId does not exist
            echo "can not remove what is not there ";
        }
    }

    public function editAction($model, $userName, $pageId)
    {
        $editting = new Controller_Admin_Edit($model, $userName, $pageId);
    }

    public function addAction($pageId)
    {

    }
}