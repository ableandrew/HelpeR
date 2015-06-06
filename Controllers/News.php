<?php
/**
 * Created by PhpStorm.
 * User: ABLE
 * Date: 25.05.2015
 * Time: 21:06
 */

namespace Controllers;


class News extends Controller {
    function __construct(){
        $this->model = new \Models\News();
        $this->view=new \Views\News;
    }
    function index(){
        $data=$this->model->get_news();
        $this->view->get_news($data);
    }
    function article(){
        $data=$this->model->get_article();
        $this->view->get_article($data);
    }
    function Technology_news(){
        $data=$this->model->get_Technology_news();
        $this->view->get_Technology_news($data);
    }
    function Education_news(){
        $data=$this->model->get_Education_news();
        $this->view->get_Education_news($data);
    }
} 