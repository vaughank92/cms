<?php


class Controller_Front_Page extends Controller_Abstract{

    public function viewAction(){
        $pageId = $this->_getParam('id');
        if($pageId){
            //$pageModel = new Model_Interface($pageId);

            //Load Model to get page
            //Load block and pass page model data
            //Render
            $this->render();
        } else {
            //404
        }
    }

} 