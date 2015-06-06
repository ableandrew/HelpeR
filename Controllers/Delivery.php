<?php
namespace Controllers;


class Delivery extends Controller {
    function index(){
       $this->view = new \Views\Delivery();
       $this->view->index();

    }

} 