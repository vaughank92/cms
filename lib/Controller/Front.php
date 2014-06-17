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

    /**URI in format index/folder/file/function
     * or AKA controller/action
     * converted to controller::action
     * actual call is done in Bootstrap.php with a call_usr_func
     */
	public static function match($uri = false){
		$uri = ($uri) ? $uri : strtok($_SERVER['REQUEST_URI'], '?');

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
                $action = false;
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
                $action = false;
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
        $viewName = self::VIEW_PREFIX . '_' . str_replace(' ', '_',ucwords(implode(' ', $uriExploded))) . '_' . ucfirst($action);
        //actionName_Action
       // echo '<p> viewName'.$viewName.'</p>';
        $action = $action . self::ACTION_SUFFIX;
        try{
            $classInstance = new $className();
            $classInstance->view = new $viewName();
            $response = $classInstance->$action();

            return $response;

        } catch (Exception $e){
            echo $e->getMessage();
        }

	}
}













