<?php


class Controller_Front_Page extends Controller_Abstract{

    public $view;

    public function viewAction(){

        //$viewCall = new Controller_Abstract();
        //$getView = $viewCall-> getView();
        //$this->view = new $getView();

        $this->view = $this->getView();

        //$blah = new $v();
        //echo " class called ";
        $pageId = $this->_getParam('id');
        if($pageId){
            $this->view->set('title', 'TESTING');

            //Start Loading Models
            //$page = Model::Page->load($pageId);

            //$this->view->set('content', $page->get('content'));
            //$this->view->set('title', $page->get('title'));

            echo $this->view;
            //$pageModel = new Model_Interface($pageId);

            //Load Model to get Page
            //Load block and pass Page model data
            //Render
            //$this->render();
        } else {
            //404
        }
    }

} 