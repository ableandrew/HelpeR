<?php
/**
 * Created by PhpStorm.
 * User: ABLE
 * Date: 31.05.2015
 * Time: 21:31
 */

namespace Models;


class Api extends Model{
    function get_all_news(){
        $array=$this->db->select("news");
        return $array;
    }
    function get_news(){

        $array = $this->db->select("news", array('id' => $_GET['id']));

        if (!$array){
            return "Нет статьи с данным id, попробуйте другое значение id ";
        }
        else
            return $array;
    }
    function get_all_product()
    {
        $array = $this->db->select("product");
        return $array;
    }
    function get_product()
    {
        $array = $this->db->select("product", array('id'=>$_GET["id"]));
        return $array;
    }


} 