<?php

class Controller_Admin_Page extends Controller_Admin_Abstract{

    public $pages = array();

    public $view;

    public function viewAction(){
        //echo "view action";
        $currentView = new View_Front_Page_View();
        //$userName, $pageId
        //return 'You are in the view action of the Front/Page class';
    }

    //needed to fetch pageId?
    //pagelist
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
    }

    public function displayUserAction()
    {
        $this->view = $this->getView();

        $value = $this->displayUserPagesAction();

        $this->view->set('pages', $value);

        $this->render();
    }

    public function allPagesAction()
    {

        $this->view = $this->getView();

        $query = App::getModel('page')->allPages();

        $returning = App::getModel('page')->basicPrint($query);

        $this->view->set('pages', $returning);

        $this->render();
    }

    public function displayPageAction()
    {
        $pageId = $this->_getParam('id');

        $query = App::getModel('page')->displayPage($pageId);
        return $query;
    }

    public function displayAction()
    {
        self::pageAction();
    }

    public function deletePageAction()
    {
        //requires loggedIn
        $pageId = $this->_getParam('id');
        $query = App::getModel('page')->deletePage($pageId);

        header('Location: '.App::getBaseUrl().'admin/page/page');
    }

    //called from postAction
    public function displayUserPagesAction()
    {

        if($this->_getParam('userid') != false)
        {
            $userId = $this->_getParam('userid');
        }
        else
        {
            $userId = $_SESSION['userId'];
        }

        //echo $userId;
        //model = model_admin_pagelist
        $query = App::getModel('page')->displayUserPages($userId);

        $returning = App::getModel('page')->basicPrint($query);
        //var_dump($returning);
        return $returning;
    }

    public function addPageAction()
    {
        App::getSession()->set('Invalid', 'Invalid input');
        $this->view = $this->getView();
        $this->render();

        $userName = $_SESSION['userName'];
        $userId = $_SESSION['userId'];
        $title = $this->_getParam('title');
        $content = $this->_getParam('content');

        if($title != '' && $content != '')
        {
            $query = App::getModel('page')->addPage($userId, $userName, $title, $content);
            return $query;
        }
        else
        {
            $_SESSION['check'] = 0;

        }
    }

    //Edit
    public function pageAction()
    {
        //pageId will need to be stored in a session
        // when no longer typed in
        $pageId = $this->_getParam('id');

        if(isset($_SESSION['userId']))
        {
            $userId = $_SESSION['userId'];
        }
        else
        {
            $userId = '0';
        }
        $pageObject = App::getModel('page')->displayPage($pageId, $userId);
        //echo "PageObject";
        //var_dump($pageObject);

        $page = App::getModel('page')->basicPrint($pageObject);
        //echo "page";
        //var_dump($page);

/*        $theme = App::getModel('interface')->getTheme($userId);*/

        if(empty($page))
        {
            //echo "null fail";
            header('Location: ' . App::getBaseUrl() . 'admin/page/post?');
        }
        else
        {
            //echo "page found";
            $this->view = $this->getView();
/*            $this->view->set('theme',$theme);*/
            $this->view->set('page', $page);
            $this->render();
        }
    }

    public function updateAction()
    {
        //echo "update action";
        $title = $this->_getParam('title');
        $content = $this->_getParam('content');
        $pageId = $this->_getParam('id');
        //requires loggedin status

        $query = App::getModel('page')->updatePage($pageId, $title, $content);

        header('Location: ' . App::getBaseUrl() . 'admin/page/page');
    }

    public function searchPageAction()
    {
        $this->view = $this->getView();

        $search = $this->_getParam('search');

        $query = App::getModel('page')->searchPage($search);

        $returning = App::getModel('page')->basicPrint($query);

        $this->view->set('pages', $returning);

        $this->render();
    }

    public function searchTitleAction()
    {
        $query = App::getModel('page')->searchTitle();

        $returning = App::getModel('page')->basicPrint($query);
        var_dump($returning);
    }

/*    public function changeThemeAction()
    {
        echo "here";
        $userId = $_SESSION['userId'];
        $theme = $this->_getParam('theme');
        var_dump($userId);
        var_dump($theme);
        $query = App::getModel('page')->changeTheme($userId,$theme);
        var_dump($query);

        header('Location: '.App::getBaseUrl().'admin/login/post');
    }*/




} 