<?php

class Controller_Front
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

        $knownControllerTypes = array('front', 'admin', 'contact', 'users');

        //this somehow magically works
        $registry = Lib_Registry::instance();
        $registry->set('uri', new Controller_Abstract());
        $uriExploded = $registry->get('uri')->getUri();
        var_dump($uriExploded);
        //$uriExploded = self::getUri();
        //var_dump($_SERVER);
        echo sizeof($uriExploded);

        if(sizeof($uriExploded != 3))
        {
            switch($uriExploded)
            {
                /*case '':
                    $uriExploded = ['admin', 'login', 'index'];
                    break;*/
                case 'contact':
                    $uriExploded = ['contact', 'form', 'submit'];
                    break;
               /* default:
                    $search = $uriExploded[0];
                    $_POST['search'] = str_replace(array('_', '/','.','-'), ' ', $search);
                    $uriExploded = ['admin', 'page', 'searchpage'];*/

            }
        }

        $knownControllerType = (in_array($uriExploded[0],$knownControllerTypes));
        $controllerType = ($knownControllerType) ? $uriExploded[0] : 'admin';

        $controller = (array_key_exists(1, $uriExploded)
            && $knownControllerType) ? $uriExploded[1] : 'login';

        $action =(array_key_exists(2, $uriExploded)
            && $knownControllerType) ? $uriExploded[2] : 'index';

        $_SERVER['REQUEST_URI'] = '/'.$controllerType.'/'.$controller.'/'.$action;

        //echo $controllerType. ' '. $controller. ' '. $action;
        return array($controllerType, $controller, $action);
    }
}













