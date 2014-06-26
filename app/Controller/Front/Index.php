<?php


class Controller_Front_Index extends Controller_Abstract{

    public function indexAction(){
       // echo ' you are on the homepage';

        $this->view = $this->getView();

        $pageId = $this->_getParam('id');
        if($pageId){
            echo $this->view;
        } else {
            //404
        }

    }

} 