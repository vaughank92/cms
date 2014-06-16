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
    private $editPageId;

    public function __construct($model, $userName, $pageId)
    {

        $this->userName = $userName;
        $this->editPageId = $pageId;

        //Adjust EditModel to model name when created
        //Creation instantiated in Controller_Abstract
        $this->model = $model->newModel(new EditModel());
    }

    //cancel button
    public function cancelEdit()
    {
        $this->model->cancel();
    }

    //save button
    public function saveEdit()
    {
        $this->model->save();
    }




}
