<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/20/14
 * Time: 9:49 AM
 */

class App_Registry {

    private $registry = array();
    static protected $_instance;

    protected function __construct(){}

    public static function instance()
    {
        if(!self::$_instance)
        {
            self::$_instance = new App_Registry();
            //if no instance, create one
        }
        return self::$_instance;
        //return instance
    }

    public function __get($resource)
    {
        if($resource)
        {
            return (array_key_exists($resource, $this->registry))?
                $this->registry[$resource]:false;
        }
    }

    public function __set($resource, $value)
    {
        if($resource)
        {
            return $this->registry[$resource] = $value;
        }
    }

    public function get($resource = false)
    {
        return $this->__get($resource);
    }

    public function set($resource = false, $value = false)
    {
        return $this->__set($resource, $value);
    }
} 