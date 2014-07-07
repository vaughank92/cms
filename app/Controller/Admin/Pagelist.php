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
        session_start();
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

        $this->displayUserPagesAction();
    }

    public function allPagesAction()
    {
        $query = $this->model->allPages();
        return $query;
    }

    public function displayPageAction()
    {
        $pageId = $this->_getParam('pageId');
        $query = $this->model->displayPage($pageId);
        return $query;
    }

    public function deletePageAction()
    {
        //requires loggedIn
        $pageId = $this->_getParam('pageId');
        $query = $this->model->deletePage($pageId);
        return $query;
    }

    public function displayUserPagesAction()
    {
        $this->view = $this->getView();
        $this->render();

        $userId = $_SESSION['userId'];

        //model = model_admin_pagelist
        $query = $this->model->displayUserPages($userId);
        $this->model->basicPrint($query);
        return $query;
    }

    public function addPageAction()
    {
        $this->view = $this->getView();
        $this->render();

        $userId = $_SESSION['userId'];
        $title = $this->_getParam('title');
        $content = $this->_getParam('content');

        if($title != '' && $content != '')
        {
            $query = $this->model->addPage($userId, $title, $content);
            return $query;
        }
        else
        {
            echo "blank fields";
        }

    }





}