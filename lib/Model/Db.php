<?php
/**
 * @package     ${MAGENTO_MODULE_NAMESPACE}\\${MAGENTO_MODULE}
 * @version     
 * @author      Blue Acorn, Inc. <code@blueacorn.com>
 * @copyright   Copyright © 2014 Blue Acorn, Inc.
 */

class Model_Db {

    private static $instance;

    public function __construct(){}

    public static function getInstance(){
        if(self::$instance == null){
            $dbSettings= App::getConfig();

            //pulls information from the xml file
            $host = $dbSettings->database->host;
            $logName = $dbSettings->database->username;
            $logPass = $dbSettings->database->password;
            $dbName = $dbSettings->database->name;

            //echo $host. ' '.$logName. ' '.$logPass. ' '. $dbName;

            //for testing
            /*$host = 'localhost';
            $logName = 'root';
            $logPass = '123123';
            $dbName = 'cms_db';*/

            //mysqli_connect will return false on failure
            //$dbHandler = mysqli_connect($host, $logName, $logPass, $dbName);
                //or die ("can't connect");
            try{
                $dbHandler = new PDO("mysql:host=$host;dbname=$dbName", $logName, $logPass);
                $dbHandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo "connected";
                return $dbHandler;
            }
            catch(PDOException $e)
            {
                echo 'Connection failed: '.$e->getMessage();
            }

            /*if(mysqli_connect_errno())
            {
                echo "failed to connect";
            }*/

            //echo gettype($dbHandler);

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

   /* public static function query($query)
    {
       // $resulting = mysqli_query($query);

    }*/
} 