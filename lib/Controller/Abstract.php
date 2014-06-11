<?php

class Controller_Abstract
{
//Utilities
    public $view;

    protected function _getParam($key = false){
        $retValue = false;
        if($key){
            $retValue = isset($_GET[$key]) ? $_GET[$key] : false;
         }
        else{
           $retValue = isset($_POST[$key]) ? $_POST[$key] : false;
        }
        return $retValue;
    }

    public function render(){
        if(isset($this->view)){
            $classInst = new $this->view();
            echo $classInst->toHtml();
        }
    }
}













