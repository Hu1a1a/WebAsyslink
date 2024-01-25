<?php
    include "php/configLenguaje.php"
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Asyslink - Mantenimiento</title>
        <link rel="stylesheet" href="estilos/mantenimiento.css">
        <link rel="stylesheet" href="estilos/barra.css">
        <link rel="stylesheet" href="estilos/guia.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
        <script src="javascript/cargarBarra.js"></script>
        <script src="javascript/botonBarra.js"></script>
    </head>
    <body>
        
        <!-- Barra del menu -->
        <div class="barra"></div>

        <!-- Barra de navegacion -->
        <div class="guia">
            <p><?php echo $langBarra['Servicios']?></p>
            <p>●</p><!-- separador -->       
            <p class="actual"><?php echo $langMant['t1']?></p>
        </div> 
    
        <div class="titulo">
            <h2><?php echo $langMant['t1']?></h2>
        </div>

        <div class="container">
            <div class="box" id="bronce">
                <h4><?php echo $langMant['t2']?></h4>
                <p><?php echo $langMant['p1']?></p>
                <p>. . .</p>
                <p>. . .</p>
                <p>. . .</p>
            </div>
            <div class="box" id="plata">
                <h4><?php echo $langMant['t3']?></h4>
                <p><?php echo $langMant['p1']?></p>
                <p>. . .</p>
                <p>. . .</p>
                <p>. . .</p>
            </div>
            <div class="box" id="oro">
                <h4><?php echo $langMant['t4']?></h4>
                <p><?php echo $langMant['p1']?></p>
                <p>. . .</p>
                <p>. . .</p>
                <p>. . .</p>
            </div>
        </div>   
    </body>
</html>