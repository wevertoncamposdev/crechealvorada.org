<?php
    class Security{

        /**
         * Tratamento de segurança
         */

        public function init_session(){
            session_start();
            echo "Sessão de prestação de contas: <br>";

            $_SESSION['views'] = "view doc";

            echo $_SESSION['views'] . ": " . session_id();
        }
    }
