<?php
require_once("_base_controller.php");

class AdminController extends BaseController
{
    protected function getFolder()
    {
        return "admin";
    }
    public function admin()
    {
        $this->render('admin', [], 'auth_layout');
    }
}
