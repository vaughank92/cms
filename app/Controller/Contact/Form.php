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

    public function __construct()
    {
        //echo "Contact_Form construct";
        //adjust naming
        //$this->model = App::getModel(str_replace('Controller_','', __CLASS__));
            //->submit('Jane Doe', 'Jane@email.com', 'comment number 2');

        //$this->name = 'Jane Doe';
        //$this->email = 'Jane@email.com';
        //$this->comment = 'comment number 2';
    }

    //data for the contact form
    public function data($name, $email, $comment)
    {
        $this->set($name,'name');
        $this->set($email,'email');
        $this->set($comment,'comment');
    }

    //submitting a form will require name, email,and comment
    public function submitAction()
    {
        $this->view = $this->getView();
        $this->render();

        /*controller sends to model to update submit
        *to TRUE so that the model can submit
        *the email, name, and contents */

        /*checks if the values exist/were filled in
        * if not returns the form again
         * stating that the fields are blank
         */
        if(array_key_exists('submit', $_POST))
        {
            $this->name = $_POST['name'];
            $this->email = $_POST['email'];
            $this->comment = $_POST['comment'];

            if($this->name != '' && $this->email != '' && $this->comment != '')
            {
              /*  echo($_POST['name']).' ';
                echo($_POST['email']).' ';
                echo($_POST['comment']).' ';
                echo "stuff";*/

                $name = $this->_getParam('name');
                $email = $this->_getParam('email');
                $comment = $this->_getParam('comment');

                App::getModel(str_replace('Controller_','', __CLASS__))->
                    submit($name, $email, $comment);

            }
            else
            {
/*                $this->view = $this->getView();
                Controller_Abstract::render();*/
                header("Location: ".App::getBaseUrl().'contact/form/submit');
                echo "Fields are empty";

            }
        }
    }

} 