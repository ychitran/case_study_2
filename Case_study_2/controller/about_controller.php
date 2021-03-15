<?php
require_once("_base_controller.php");

class AboutController extends BaseController
{
    protected function getFolder()
    {
        return "about";
    }

    public function about()
    {
        $this->render('about');
    }
}
