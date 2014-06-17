<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/12/14
 * Time: 9:23 AM
 */

class Controller_Contact_Form extends Controller_Abstract{
    //controller for the Contact Us form

    private $model;

    public $name;
    public $email;
    public $comment;

    public function __construct($model)
    {
        //adjust naming
        $this->model = $model->newModel(new Model_Contact_Form());
    }

    //data for the contact form
    public function data($name, $email, $comment)
    {
        $this->set('name',$name);
        $this->set('email',$email);
        $this->set('comment',$comment);
    }

    public function submitAction()
    {
        /*controller sends to model to update submit
        *to TRUE so that the model can submit
        *the email, name, and contents
        */
        if(isset($name) && isset($email) && isset($comment))
        {
            $this->model->submit();
                //= true;
        }
        else
        {
            echo "Fields are empty";
        }
    }

} 