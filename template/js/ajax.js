    /* Institucional */
    $(function() {
        $('#institucional').on("click", function() {
            $.ajax({
                type: "POST",
                dataType: "html",
                url: './mvc/model/consultar.php',
                data: { query: "institucional" },
                beforeSend: function() {
                    $('#resultado-institucional').html(
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
                    $('#resultado-institucional').html(result);
                },
                error: function() {
                    $('#resultado-institucional').html("Error");
                }
            })
        })
    })

    /* Semas */
    $(function() {
        $('#semas').on("click", function() {
            $.ajax({
                type: "POST",
                dataType: "html",
                url: './mvc/model/consultar.php',
                data: { query: "semas" },
                beforeSend: function() {
                    $('#resultado-semas').html(
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
                    $('#resultado-semas').html(result);
                },
                error: function() {
                    $('#resultado-semas').html("Error");
                }
            })
        })
    })

    /* CMDCA */
    $(function() {
        $('#cmdca').on("click", function() {
            $.ajax({
                type: "POST",
                dataType: "html",
                url: './mvc/model/consultar.php',
                data: { query: "cmdca" },
                beforeSend: function() {
                    $('#resultado-cmdca').html(
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
                    $('#resultado-cmdca').html(result);
                },
                error: function() {
                    $('#resultado-cmdca').html("Error");
                }
            })
        })
    })