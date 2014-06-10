<?php
/**
 * @package     ${MAGENTO_MODULE_NAMESPACE}\\${MAGENTO_MODULE}
 * @version
 * @author      Blue Acorn, Inc. <code@blueacorn.com>
 * @copyright   Copyright © 2014 Blue Acorn, Inc.
 */

class Controller_Front_Page {

    protected function __construct(){
        //Check that user is logged in...
    }

    public function view(){
        return 'You are in the view action of the front/page class';
    }

} 