<?php

class Controller_Abstract
{
//Utilities

    const CLASS_PREFIX = 'Controller';
    const ACTION_SUFFIX = 'Action';
    const VIEW_PREFIX = 'View';

    public $view;
    protected $controlData = array();

    protected function _getParam($key = false){
        $retValue = false;
        if($key){
            $retValue = isset($_GET[$key]) ? $_GET[$key] : false;
            echo "get ".$key;
         }
        else{
           $retValue = isset($_POST[$key]) ? $_POST[$key] : false;
            echo "post";
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

    /**URI in format index/folder/file/function
     * or AKA controller/action
     * converted to controller::action
     * actual call is done in Bootstrap.php with a call_usr_func
     * MOVED FROM CONTROLLER_FRONT
     */
    public static function match($uri = false){
        $uri = ($uri) ? $uri : strtok($_SERVER['REQUEST_URI'], '?');
        echo $uri;

        //No params sent to login page
        //Better way to do this?
        if($uri == '/' || $uri == '/index')
        {
            $uri = '/index/admin/login/post';
        }

        //echo '<p>'.$uri;
        //Start converting uri to controller::action
        $uriExploded = explode(DS, $uri);
        $size = count($uriExploded);
        //echo 'size '.$size;
        $action = $uriExploded[$size-1];
        //echo '<p> action= '.$action.'</p>';

        //removal needed [0] NULL,[1] index,[2] action
        if($uriExploded[1] == 'index')
        {
            //if index is there but there is no action the class is called still
            if($size <= 4)
            {
                $action = 'post';
                unset($uriExploded[0], $uriExploded[1]);
            }
            else
            {
                //if index and action are present, coordinating function called
                unset($uriExploded[0],$uriExploded[1],$uriExploded[$size-1]);
            }
        }
        //if index and action not present, class can still be called
        else
        {
            if($size <= 3)
            {
                $action = 'post';
                unset($uriExploded[0]);
            }
            //action present but index is not
            else
            {
                unset($uriExploded[0],$uriExploded[$size-1]);
            }
        }
        //Controller_className
        $className= self::CLASS_PREFIX . '_' . str_replace(' ', '_',ucwords(implode(' ', $uriExploded)));

        //viewName_View
        //echo '<p> className '.$className;
        $viewName = self::VIEW_PREFIX . '_' . str_replace(' ', '_',ucwords(implode(' ', $uriExploded))) . '_' . ucfirst($action);
        //actionName_Action
        //echo '<p> viewName '.$viewName.'</p>';
        $action = $action . self::ACTION_SUFFIX;
        //echo '<p> action '. $action;
        try{
            $classInstance = new $className();

            $classInstance->view = new $viewName();
            $response = $classInstance->$action();
            //echo '<p> response '. $response;

            return $response;

        } catch (Exception $e){
            echo $e->getMessage();
        }

    }
}














