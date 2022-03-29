$page = "Institucional";

/* Consulta por `data` distinta de acordo com o `tipo` */
$sql = "SELECT DISTINCT `data` FROM transparencia WHERE tipo = '$page' ";
$result = $db->conectar()->query($sql);
$count = 1;
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $data = $row['data'];
        $year = date("Y", strtotime($data));
?>

        <h2 class="accordion-header" id="heading-xxx">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-xxx" aria-expanded="false" aria-controls="collapse-xxx">
                <?php $year?>

            </button>
        </h2>
        <div id="collapse-xxx" class="accordion-collapse collapse" aria-labelledby="heading-xxx" data-bs-parent="#accordionExample">
            <div class="accordion-body" style="height: 200px; background:#EAEDED;">
                Arquivo
            </div>
        </div>

<?php 

$count++;

    }
} else {
    echo "Não há dados!";
}

/* Finalizando conexão com o banco de dados! */
mysqli_close($db->conectar());
if (!mysqli_close($db->conectar())) {
    echo "Conexão com o Banco de Dados não foi finalizada!";
}

?>