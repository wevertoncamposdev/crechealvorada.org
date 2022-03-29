<?php


/* controller */
require "./mvc/controller/controller.php";

$page = isset($_GET['page']) ? $_GET['page'] : "index";

$ctrl = new HomeController();

switch ($page) {

    case "index":
        $ctrl->Index();
        break;

    case "sobre":
        $ctrl->Sobre();
        break;

    case "institucional":
        $ctrl->Transparencia();
        break;
    case "semas":
        $ctrl->Transparencia();
        break;
    case "cmdca":
        $ctrl->Transparencia();
        break;


    case "detalhes_eventos":
        $ctrl->Eventos();
        break;
    case "detalhes_atividades":
        $ctrl->Atividades();
        break;
    case "ajudar":
        $ctrl->Ajudar();
        break;
}
