<?php
/**
 * Created by PhpStorm.
 * User: ABLE
 * Date: 30.05.2015
 * Time: 21:27
 */

namespace Controllers;


class Product extends Controller{
    function __construct(){
        $this->view=new \Views\Product;
        $this->model=new \Models\Product;
    }
    function index(){
    $data=$this->model->get_product_list();
    $this->view->get_product_list($data);
}
    function goods(){
        $data=$this->model->get_product();
        $this->view->get_product($data);
    }
    function get_Tshirt(){
        $data=$this->model->get_all_Tshirt();
        $this->view->get_product_list($data);
    }
    function get_caps(){
        $data=$this->model->get_all_caps();
        $this->view->get_product_list($data);
    }


} 