<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/16/14
 * Time: 2:10 PM
 */

abstract class Model_Create{

    protected $createdModel;
    abstract public function newModel(Model_Modelstart $modelCall);

} 