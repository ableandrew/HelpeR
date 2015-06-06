<?php
/**
 * Created by PhpStorm.
 * User: ABLE
 * Date: 30.05.2015
 * Time: 21:35
 */

namespace Models;


class Product extends Model{
function get_product_list(){
     $product=$this->db->query("SELECT id,name,price,description, (SELECT imagepath FROM product_image WHERE product_id=product.id limit 1) as imagePath FROM product");
    return $product;
}
    function get_product(){
        $product=$this->db->select("product",array('id' => $_GET['productID']), "");
        $images=$this->db->select("product_image", array('product_id' => $_GET['productID']), "imagepath");
        $data["product"]= $product;
        $data["images"]= $images;
        return $data;
    }
    function get_all_Tshirt(){
        $product=$this->db->query("SELECT id,name,price,description, (SELECT imagepath FROM product_image WHERE product_id=product.id limit 1) as imagePath FROM product WHERE id_type_tovar=1");
        return $product;
    }
    function get_all_caps(){
        $product=$this->db->query("SELECT id,name,price,description, (SELECT imagepath FROM product_image WHERE product_id=product.id limit 1) as imagePath FROM product WHERE id_type_tovar=2");
        return $product;
    }
} 