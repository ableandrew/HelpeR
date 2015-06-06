<?php
/**
 * Created by PhpStorm.
 * User: Valik
 * Date: 26.05.2015
 * Time: 16:35
 */

namespace Controllers;


class Test extends Controller {
function __construct(){
    $this->view=new \Views\Test();
}
    function index(){
        $this->view->index();
    }
} 