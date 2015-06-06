<?php


namespace Views;


class Test extends View {
function index(){
    $this->loadHeader();
    $this->loadLeftBar();
    include_once ("tmpl/View_Test.php");
    $this->loadFooter();
}
} 