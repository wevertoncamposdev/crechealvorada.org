/**
 * 
 * @WevertonCampos
 *  
 * Verifica o @buttom que está clicando 
 * Se esse id está correto ele faz a consulta no banco de dados e retorna o resultado. 
 * Após retornar o resultado ele altera o @attributo para não fazer mais a consulta ,
 * e manter as informações na página. evitando assim necessidade de varias @query
 * 
 * Clicando novamente no @buttom ele identifica que o @attributo foi alterado,
 * e não faz a consulta novamente
 * 
 * Esse @snippet pode servir futuramente para segurança, evintar consultado no banco com id alterada.
 *
 * 
 * */

$(document).ready(function() {
    $("#item").find("button[type='button']").click(function() {
        let id = $(this).attr("id");
        if (id == "institucional" || id == "semas" || id == "cmdca") {
            $.ajax({
                type: "POST",
                dataType: "html",
                url: './mvc/model/consultar.php',
                data: { query: id },
                beforeSend: function() {
                    $('#resultado-' + id).html(
                        `
                                <div class="spinner-border text-success" role="status">
                                <span class="sr-only">
                                </span>
                                </div>
                                <div>
                                Buscando arquivos em nosso banco de dados...
                                </div>
                                `
                    )
                },
                success: function(result) {
                    $('#resultado-' + id).html(result);
                    $('#' + id).attr('id', '#acessou');
                },
                error: function() {
                    $('#resultado-' + id).html("Error durante a consulta");
                }
            })
        }
    });
});