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

    public $view;
    //call Controller_Admin_Abstract to check log in?

    public function __construct()
    {
        $this->model = App::getModel(str_replace('Controller_','', __CLASS__));
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

    public function postAction()
    {

        //accesses the view
        $this->view = $this->getView();

        //test case
        //sets the model
        //calls DisplayUserPages
        //echos results

        //echo "echo " .str_replace('Controller_','', __CLASS__);


        $this->model->basicPrint(self::displayUserPagesAction('adminuser'));
    }

    public function allPagesAction()
    {
        $query = $this->model->allPages();
    }

    public function displayPageAction($pageId)
    {
        $query = $this->model->displayPage($pageId);
    }

    public function deletePageAction($pageId)
    {
        //requires loggedIn
        $query = $this->model->deletePage($pageId);
    }

    public function displayUserPagesAction($userName)
    {
        echo "display User Pages Action";
        $query = $this->model->displayUserPages($userName);
    }

    public function addPageAction($userName, $title)
    {
        $query = $this->model->addPage($userName, $title);
    }




}