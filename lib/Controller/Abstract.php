<?php

class Controller_Abstract
{
//Utilities

    public $view;
    protected $controlData = array();

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
            echo $this->view->toHtml();
        }
    }

    //model creation
    public function create()
    {
        $modelLoader = new Model_Creation();
    }

    //Magic getters and setters
    public function __get($property){
        if($property){
            return (array_key_exists($property, $this->controlData)) ? $this->controlData[$property] : false;
        }
    }

    public function __set($property = false, $value = false){
        if($property){
            return $this->controlData[$property] = $value;
        }
    }

    public function get($property = false){
        return $this->__get($property);
    }

    public function set($property = false, $value = false){
        return $this->__set($property, $value);
    }
}














