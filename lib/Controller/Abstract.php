<?php

class Controller_Abstract
{

    public $view;

    protected function _getParam($key = false){
        $retValue = false;
        if($key){
            $retValue = isset($_GET[$key]) ? $_GET[$key] : false;
            $retValue = isset($_POST[$key]) ? $_POST[$key] : false;
         }
        return $retValue;
    }

    public function render(){
        if(isset($this->view)){
            return new $this->view();
        }
    }
}













