<?php
/**
 * Created by PhpStorm.
 * User: ABLE
 * Date: 31.05.2015
 * Time: 21:29
 */

namespace Controllers;
class Api extends Controller
{
    function __construct()
    {
        $this->model = new \Models\Api;
        $this->view = new \Views\Api;
    }

    function index()
    {
        $this->view->api();
    }

    function post()
    {
    }

    function get($urlPath)
    {
        $obj = new \Models\Api();
        if (method_exists($obj, "get_" . $urlPath[3])) {
            $method = "get_" . $urlPath[3];
            $data = $obj->$method();
            $array=json_encode($data);
            echo $array;
        }
    }
}