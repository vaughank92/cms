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

    public static function getInstance(){
        if(self::$instance == null){
            //Initiate connection to mysql and store in instance
        } else {
            return self::$instance;
        }
    }
} 