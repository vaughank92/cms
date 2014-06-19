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


}













