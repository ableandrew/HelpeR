<?php
namespace Views;
class View {
   protected function loadHeader() {
        include_once("tmpl/header.php");
    }
   protected function  loadLeftBar(){
        include_once("tmpl/leftbar.php");
    }
    protected function  loadFooter(){
        include_once("tmpl/footer.php");
    }
} 