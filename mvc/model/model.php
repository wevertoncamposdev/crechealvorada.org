<?php


$path = $_SERVER['DOCUMENT_ROOT'] . '/novo.crechealvorada.org/vendor/autoload.php';
$env = $_SERVER['DOCUMENT_ROOT'] . '/novo.crechealvorada.org';

require $path;
$dotenv = Dotenv\Dotenv::createImmutable($env);
$dotenv->load();

class Model
{

    /**
     * Dados do Model
     * @var db
     */

    public function ListarDados()
    {
        return "Dados Vindos do Model";
    }
}

class Database
{

    public function conectar()
    {
        $host = $_ENV['DB_HOST'];
        $user = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASSWORD'];
        $database = $_ENV['DB_DATABASE'];
        $port = $_ENV['DB_PORT'];

        $db_connect = new mysqli($host, $user, $password, $database, $port);
        mysqli_set_charset($db_connect, "utf8");

        if ($db_connect->connect_error) {
            echo 'Falha: ' . $db_connect->connect_error;
        } else {
            //echo 'Conexão feita com sucesso' . '<br><br>';
            return $db_connect;
        }
        
    }

    public function consultar($table){

        $sql = "SELECT * FROM $table ";
        $result = $this->conectar()->query($sql);
        $array = array();
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                return $row;
            }
        }
    }
}


/* finalizar conexão com as variaveis de ambiente */
$dotenv->safeLoad();

/*  */