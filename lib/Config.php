<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/20/14
 * Time: 9:49 AM
 */

class Config {

    private $registry = array();
    static protected $_instance;
    protected $config;
    protected $file;
    protected $rootNode = 'app';


    protected function __construct(){
        $this->file = ROOT . 'assets/config.xml';
        $this->config = simplexml_load_file($this->file);
        echo $this->config;
    }

    public static function instance()
    {
        if(!self::$_instance)
        {
            self::$_instance = new Config();
            //echo "instance";
        }
        return self::$_instance;
    }

    public function __get($resource)
    {
        if($resource)
        {
            return $this->config->$resource;
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

    public function installed()
    {
        $this->config->is_installed = '1';
        return $this->config->asXML($this->file);

    }
} 