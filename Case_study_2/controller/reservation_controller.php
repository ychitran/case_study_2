<?php
require_once("_base_controller.php");

class ReservationController extends BaseController
{
    protected function getFolder()
    {
        return "reservation";
    }

    public function reservation()
    {
        $this->render('reservation', [], 'admin_layout');
    }
}
