<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/13/14
 * Time: 2:52 PM
 */

class Controller_Admin_Edit extends Controller_Abstract{

    private $model;
    private $userName;
    private $pageId;

    public function __construct($model, $userName, $pageId)
    {
        $this->userName = $userName;
        $this->pageId = $this->_getParam('id');

        //Adjust EditModel to model name when created
        //Creation instantiated in Controller_Abstract
        $this->model = $model->newModel(new Model_Admin_Edit($pageId));
    }

    //cancel button
    public function cancelAction()
    {
        $this->model->cancel();
    }

    //save button
    public function saveAction($pageId)
    {
        //$pageId = $this->_getParam('id');
        $this->model->save($pageId);
    }




}
