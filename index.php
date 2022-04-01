<?php


/* controller */
require './mvc/controller/controller.php';

$page = isset($_GET['page']) ? $_GET['page'] : "index";

$ctrl = new HomeController();

switch ($page) {

    case "index":
        $ctrl->Index();
        break;

    case "sobre":
        $ctrl->Sobre();
        break;

    case "transparencia":
        $ctrl->Transparencia();
        break;


    
}
