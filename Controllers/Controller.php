<?php
namespace Controllers;
abstract class Controller
{
    public $model;
    public $view;
    function __construct()
    {
        $this->view = new \Views\View();
    }
}