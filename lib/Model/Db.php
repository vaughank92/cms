<?php
/**
 * @package     ${MAGENTO_MODULE_NAMESPACE}\\${MAGENTO_MODULE}
 * @version     
 * @author      Blue Acorn, Inc. <code@blueacorn.com>
 * @copyright   Copyright © 2014 Blue Acorn, Inc.
 */

class Model_Db {

    private static $instance;


    private function __construct(){}

    public $host;
    public $logName;
    public $logPass;
    public $dbName;

    public static function getInstance(){
        if(self::$instance == null){
            //$host = 'localhost';
            //$logName = 'name';
            //$logPass = 'password';
            //$dbName = 'test';

            //mysqli_connect will return false on failure
            $dbHandler = mysqli_connect($host, $logName, $logPass, $dbName)
                or die ("can't connect");
        } else {
            return self::$instance;
        }
    }

    public static function disconnect($dbHandler)
    {
        //@mysql_close will suppress error msgs
        if(mysqli_close($dbHandler) !=0)
        {
            echo "server closed";
            return 1;
        }
        else
        {
            echo "error";
            return 0;
        }
    }

    public static function query($query)
    {
       // $resulting = mysqli_query($query);

    }
} 