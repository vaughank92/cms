<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/20/14
 * Time: 9:49 AM
 */

class Model_Session{

    //allows for global access without the use of global variables
    //registry method

    private $registry = array();
    static protected $_instance;

    protected function __construct(){}

    public static function instance()
    {
        if(!self::$_instance)
        {
            self::$_instance = new Model_Session();
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

    public function __set($resource = null, $value = null)
    {
        if($resource)
        {
            return $this->registry[$resource] = $value;
        }
    }

    public function get($resource = null)
    {
        return $this->__get($resource);
    }

    public function set($resource = null, $value = null)
    {
        return $this->__set($resource, $value);
    }
} 