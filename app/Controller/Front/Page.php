<?php

class Controller_Front_Page extends Controller_Abstract{

    public $view;
    public $model;

    public function __construct()
    {
        $this->model = App::getModel('users manage')->display('username');

    }

    public function viewAction(){
        $this->view = $this->getView();

        //$blah = new $v();
        //echo " class called ";
        $pageId = $this->_getParam('id');
        if($pageId){
            $this->view->set('title', 'TESTING');


            echo $this->view;

        } else {
            //404
        }
    }

} 