<?php include 'header.php'; ?>

<div class="" style=" margin-top:50px; margin-bottom: 150px;">
    <div class="container">
        <div class="row">

            <div class="col-md-12 section-title text-center">
                <h3>Transparência</h3>
                <p>Todos os detalhes financeiros</p>
                <span class="section-title-line"></span>
            </div>

            <div class="accordion" id="accordionExample" style="margin-top:50px;">

                <div class="accordion-item">

                    <!-- Verificar uma forma mais pratica para esta consulta -->
                    <h2 class="accordion-header" id="heading-institucional">
                        <button id="institucional" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-institucional" aria-expanded="false" aria-controls="collapse-institucional">
                            INSTITUCIONAL
                        </button>
                    </h2>
                    <div id="collapse-institucional" class="accordion-collapse collapse" aria-labelledby="heading-institucional" data-bs-parent="#accordionExample">
                        <div id="resultado-institucional" class="accordion-body" style="background: #f0f0f0;">

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-semas">
                        <button name="semas" id="semas" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-semas" aria-expanded="false" aria-controls="collapse-semas">
                            SEMAS
                        </button>
                    </h2>
                    <div id="collapse-semas" class="accordion-collapse collapse" aria-labelledby="heading-semas" data-bs-parent="#accordionExample">
                        <div id="resultado-semas" class="accordion-body" style="background: #f0f0f0;">
                            
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-cmdca">
                        <button name="cmdca" id="cmdca" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-cmdca" aria-expanded="false" aria-controls="collapse-cmdca">
                            CMDCA
                        </button>
                    </h2>
                    <div id="collapse-cmdca" class="accordion-collapse collapse" aria-labelledby="heading-cmdca" data-bs-parent="#accordionExample">
                        <div id="resultado-cmdca" class="accordion-body" style="background: #f0f0f0;">
                            
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="./template/js/ajax.js"></script>

<?php include 'footer.php'; ?>