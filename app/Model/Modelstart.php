<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/16/14
 * Time: 2:34 PM
 */

interface Model_Modelstart {

    function provideModel();

    //models include provideModel method
    //models extend model_interface and implement model_modelstart
}


/*model
* class Model extends model_interface and implements model_modelstart
 * {
 *  public function provideModel()
 * {
 *
 * }
 *
 * }
 */