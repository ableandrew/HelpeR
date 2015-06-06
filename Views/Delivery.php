<?php
/**
 * Created by PhpStorm.
 * User: ABLE
 * Date: 24.05.2015
 * Time: 13:46
 */

namespace Views;


class Delivery extends View{
     function index(){
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Delivery.php");
        $this->loadFooter();
    }
} 