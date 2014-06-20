<?php

class Controller_Front extends Controller_Abstract
{
    const CLASS_PREFIX = 'Controller';
    const ACTION_SUFFIX = 'Action';
    const VIEW_PREFIX = 'View';

	function __construct()
	{
        //this is here to be sure the Controller_Front is active
	}
    static protected $_instance;

    static public function instance()
    {
        if(!self::$_instance){
            self::$_instance = new Controller_Front();
        }
        return self::$_instance;
    }

    /*URI in format index/folder/file/function
     * or AKA controller/action
     * converted to controller::action
     * actual call is done in Bootstrap.php with a call_usr_func
     */
	public static function match(){
        list($controllerType, $controller, $action) = self::_getControllerVars();

        //Controller_className
        $className= self::CLASS_PREFIX . '_' . ucwords($controllerType) . '_' . ucwords($controller);

        //$viewName = self::VIEW_PREFIX . '_' . str_replace(' ', '_',ucwords(implode(' ', $uriExploded))) . '_' . ucfirst($action);
        //actionName_Action
       // echo '<p> viewName'.$viewName.'</p>';

        $action = $action . self::ACTION_SUFFIX;
        try{
            $classInstance = new $className();
            //$classInstance->view = new $viewName();
            $response = $classInstance->$action();

            return $response;

        } catch (Exception $e){
            echo $e->getMessage();
        }
	}

    private static function _getControllerVars(){
        $knownControllerTypes = array('front', 'admin');

       /* $uri = ($uri) ? $uri : strtok($_SERVER['REQUEST_URI'], '?');
        $uriExploded = explode('/', ltrim($uri, '/'));*/

        $uriExploded = self::getUri();

        $knownControllerType = (in_array($uriExploded[0],$knownControllerTypes));
        $controllerType = ($knownControllerType) ? $uriExploded[0] : 'front';
        $controller = (array_key_exists(1, $uriExploded) && $knownControllerType) ? $uriExploded[1] : 'index';
        $action =(array_key_exists(2, $uriExploded) && $knownControllerType) ? $uriExploded[2] : 'index';

        return array($controllerType, $controller, $action);
    }
}













