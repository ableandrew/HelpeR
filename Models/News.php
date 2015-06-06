<?php
/**
 * Created by PhpStorm.
 * User: ABLE
 * Date: 25.05.2015
 * Time: 21:12
 */

namespace Models;


class News extends Model {
    function get_news(){
        $array=$this->db->select("news","","","id","true");
        return $array;
    }
    function get_Technology_news(){
        $array=$this->db->select("news",array("section"=>"Technology"),"","id","true");
        return $array;
    }
    function get_Education_news(){
        $array=$this->db->select("news",array("section"=>"Education"),"","id","true");
        return $array;
    }
    function get_article(){
        $array = $this->db->select("news", array('id' => $_GET['newsID']), "");
        return $array;
    }

} 