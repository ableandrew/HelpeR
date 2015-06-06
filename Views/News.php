<?php
/**
 * Created by PhpStorm.
 * User: ABLE
 * Date: 25.05.2015
 * Time: 21:09
 */

namespace Views;


class News extends View{
    function get_news($data){
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_News.php");
        $this->loadFooter();
    }
    function get_article($data){
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_Article.php");
        $this->loadFooter();
    }
    function get_Technology_news($data){
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_News.php");
        $this->loadFooter();
    }
    function get_Education_news ($data){
        $this->loadHeader();
        $this->loadLeftBar();
        include_once("tmpl/View_News.php");
        $this->loadFooter();
    }

} 