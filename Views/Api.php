<?php
/**
 * Created by PhpStorm.
 * User: ABLE
 * Date: 31.05.2015
 * Time: 21:32
 */

namespace Views;


class Api extends View{
    function api(){
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Api.php");
        $this->loadFooter();
    }

} 