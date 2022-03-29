<?php

require "./mvc/model/model.php";

class Controller {

    /**
     * inciando model e view
     */

    public function index(){

        $model = new Model();
        $dados = $model->ListarDados();

        include "./mvc/views/views.php";
        
    }
}

class HomeController{
    public function index(){
        include "./mvc/views/principal.php";
    }
    public function Sobre(){
        include "./mvc/views/detalhes/sobre.php";
    }
    public function Admin(){
        include "./mvc/views/administracao/admin.php";
    }
    public function Transparencia(){
        include "./mvc/views/detalhes/detalhes_transparencia.php";
    }
    public function Eventos(){
        include "./mvc/views/detalhes/detalhes_eventos.php";
    }
    public function Atividades(){
        include "./mvc/views/detalhes/detalhes_atividades.php";
    }
    public function Ajudar(){
        include "./mvc/views/detalhes/parceiro.php";
    }
}