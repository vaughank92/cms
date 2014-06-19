<?php


class Controller_Front_Page extends Controller_Abstract{

    public function viewAction(){
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