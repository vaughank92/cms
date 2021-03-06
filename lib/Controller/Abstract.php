<?php

class Controller_Abstract
{
//Utilities

    const CLASS_PREFIX = 'Controller';
    const ACTION_SUFFIX = 'Action';
    const VIEW_PREFIX = 'View';

    public $view;
    protected $controlData = array();
    public $className;
    public $registry;

    protected function _getParam($key = false){
        $retValue = false;
        if($key){
            $retValue = isset($_GET[$key]) ? $_GET[$key] : false;
            //echo "get ".$key;
            if(!$retValue){
                //secho "post $_POST[$key]";
                $retValue = isset($_POST[$key]) ? $_POST[$key] : false;
            }
         }
        //echo $retValue;
        return $retValue;
    }

    public function getUri()
    {
        //because constantly redoing this is annoying

        //echo $_SERVER['REQUEST_URI'];

        $uri = false;
        $uri = ($uri) ? $uri : strtok($_SERVER['REQUEST_URI'], '?');
        //echo $uri;
        $uriExploded = explode('/', ltrim($uri, '/'));
        return $uriExploded;
    }

    public function getView()
    {
        $uriExploded = self::getUri();
        $viewName = self::VIEW_PREFIX . '_'. str_replace(' ', '_',
                ucwords(implode(' ', $uriExploded)));
        //echo "view ". $viewName;
        return new $viewName();
    }

    public function render(){
        if(isset($this->view)){
            echo $this->view->toHtml();
        }
    }
    //model creation
    public function create()
    {
        //$modelLoader = new Model_Creation();
    }

    //Magic getters and setters
    public function __get($property){
        if($property){
            return (array_key_exists($property, $this->controlData)) ?
                $this->controlData[$property] : false;
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














