<?php
/**
 * Created by PhpStorm.
 * User: ABLE
 * Date: 30.05.2015
 * Time: 21:35
 */

namespace Views;


class Product extends View {
    function get_product_list($data){
        $this->loadHeader();
        $this->loadLeftBar();
        include_once ("tmpl/View_Product_list.php");
        $this->loadFooter();
    }
    function get_product($data){
        $this->loadHeader();
        $this->loadLeftBar();
        include_once ("tmpl/View_Product.php");
        $this->loadFooter();
    }

} 