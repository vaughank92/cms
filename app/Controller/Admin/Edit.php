<?php
/**
 * Created by PhpStorm.
 * User: katievaughan
 * Date: 6/13/14
 * Time: 2:52 PM
 */

class Controller_Admin_Edit extends Controller_Admin_Abstract{

/*    public function __construct()
    {
        session_start();
        $this->model = App::getModel(str_replace('Controller_','',__CLASS__));
    }*/

    public function pageAction()
    {

        //pageId will need to be stored in a session
        // when no longer typed in
        $pageId = $this->_getParam('id');
        $userId = $_SESSION['userId'];
        $page = App::getModel('page')->displayPage($pageId, $userId);

        if(empty($page))
        {
            echo "null fail";
            header('Location: ' . App::getBaseUrl() . 'admin/pagelist/post?');
        }
        else
        {
            $this->view = $this->getView();
            $this->view->set('page', $page);
            $this->render();
        }


    }

    public function updateAction()
    {
        $title = $this->_getParam('title');
        $content = $this->_getParam('content');
        $pageId = $_SESSION['pageId'];
        //requires loggedin status

        $query = App::getModel('page')->updatePage($pageId, $title, $content);

        header('Location: ' . App::getBaseUrl() . 'admin/edit/page');
    }

    //cancel button
    public function cancelAction()
    {
        $this->model->cancel();
    }

    //save button
    public function saveAction()
    {
        $this->model->save();
    }




}
