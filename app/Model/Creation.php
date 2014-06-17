<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/16/14
 * Time: 9:59 AM
 */

const MODEL_PREFIX = 'Model_';

class Model_Creation extends Model_Create{

    public function newModel(Model_Modelstart $modelCall)
    {

        //newModel is what will be called
        //allows for provideModel to be called from Modelstart
        //Controllers will call newModel with the designated model needed
        $this->createdModel = new $modelCall();
        return($this->createdModel->provideModel());
    }

    /*private $userName;
    private $function;

    public function __construct($function, $userName)
    {
        $this->userName = $userName;
        $this->function = $function;
    }

    public function newModel($function)
    {
        return new MODEL_PREFIX.$function.'();';
    }*/
}