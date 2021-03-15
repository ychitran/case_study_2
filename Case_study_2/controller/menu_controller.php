<?php
require_once("_base_controller.php");

class MenuController extends BaseController
{
    protected function getFolder()
    {
        return "menu";
    }

    public function menu()
    {
        $this->render('menu');
    }
}
