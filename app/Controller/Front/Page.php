<?php
/**
 * @package     ${MAGENTO_MODULE_NAMESPACE}\\${MAGENTO_MODULE}
 * @version     
 * @author      Blue Acorn, Inc. <code@blueacorn.com>
 * @copyright   Copyright © 2014 Blue Acorn, Inc.
 */

class Controller_Front_Page extends Controller_Abstract{

    public function viewAction(){
        $pageId = $this->_getParam('id');
        if($pageId){
            //Load Model to get page
            //Load block and pass page model data
            //Render
            $this->render();
        } else {
            //404
        }
    }

} 