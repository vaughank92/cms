<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/12/14
 * Time: 4:29 PM
 */

class Controller_Admin_Pagelist extends Controller_Admin_Abstract{
    //controller to handle the list of pages for the user

    public $pages = array();

    public $view;
    //call Controller_Admin_Abstract to check log in?

    //needed to fetch pageId?
    public function getPageInfo()
    {
        $pageId = $this->_getParam('id');
        $page = App::getModel('page')->load($pageId);
        if($page)
        {
            $page->get('title');
            $page->get('content');
            $page->get('header');
            $page->get('footer');
        }
        else
        {
            echo "page does not exist";
        }
    }

    public function postAction()
    {

        $this->view = $this->getView();

        $value = $this->displayUserPagesAction();

        $this->view->set('pages', $value);

        $this->render();

        //Sets page information to Sessions..
        //stored in multiple sessions at the moment
    }

    public function allPagesAction()
    {
        $query = App::getModel('page')->allPages();
        return $query;
    }

    public function displayPageAction()
    {
        $pageId = $this->_getParam('id');
        $query = App::getModel('page')->displayPage($pageId);
        return $query;
    }

    public function deletePageAction()
    {
        //requires loggedIn
        $pageId = $this->_getParam('id');
        $query = App::getModel('page')->deletePage($pageId);
        return $query;
    }


    //called from postAction
    public function displayUserPagesAction()
    {


        $userId = $_SESSION['userId'];

        //model = model_admin_pagelist
        $query = App::getModel('page')->displayUserPages($userId);
        $returning = App::getModel('page')->basicPrint($query);

        return $returning;
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
            $query = App::getModel('page')->addPage($userId, $title, $content);
            return $query;
        }
        else
        {
            echo "blank fields";
        }

    }





}