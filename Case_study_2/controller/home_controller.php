<?php
require_once("_base_controller.php");

class HomeController extends BaseController
{
    protected function getFolder()
    {
        return "home";
    }
    public function home()
    {
        $this->render('home');
    }
}
