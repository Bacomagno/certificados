<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <title>Campus Virtual</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style type="text/css" media="print">
      @page { 
          size:Letter landscape;
          -webkit-print-color-adjust: exact; 
      }
    </style>
	
    <style>
        
        body{
            color: #012557;
            font-size: 25px;
            background-repeat: no-repeat;
            background-size: 1366px;
            width: 1366px;
            user-select: none;
        }    
        
        .firma p {
            margin-bottom: -15px;
            z-index: 1;
        }
        
        #bg-text {
            color: rgba(211, 211, 211, 0.2);
            font-size: 16px;
            transform: rotate(-90deg);
            -webkit-transform: rotate(-90deg);
            position: fixed;
            z-index: 0;
            margin-top: -183px;
            margin-left: 124px;
        }
        
        img {
            user-select: none;
            -webkit-user-drag: none;
        }
    
        
    </style>
    
    <!-- jquery -->
    <script src="http://virtual.unihorizonte.edu.co:9000/proyectosunihorizonte/assets/js/jquery.min.js"></script>

    <body>
    
            
        <div style="position: fixed;transform: rotateZ(-90deg);margin-left: -323px;margin-top: 602px;font-size: 12px;font-weight: 600;color: #1e4e7e;">
            Verificar certificado en: http://campus.unihorizonte.edu.co/certificados/ - Pestaña: Consultar un certificado
            <br/>
            Código de verificación: <?php print_r($query[0]->codigo_unico) ?>
        </div>
        
	<img src="/certificados/img/<?php print_r($query[0]->fondo) ?>" style="width: 1366px;position: fixed;z-index: -1;">

        <br/>
        <br/>
        
        <div class="w3-container w3-center">
            
        </div>
        
        
        <div class="w3-container w3-center">
            <br/>
            <br/>
            <br/>
            <br/>
            <p> Participo en: </p>
            <p style="font-weight: bolder;font-style: italic;"><?php print_r($query[0]->nombre_del_evento) ?></p>
            <p>Como:</p>
            <p style="font-weight: bolder;font-style: italic;"><?php print_r($query[0]->rol) ?></p>
            <p style="font-weight: bolder;font-style: italic;"><?php print_r($query[0]->nombre_del_participante) ?></p>
            <p style="font-weight: bolder;font-style: italic;"><?php print_r($query[0]->tipo_de_documento_de_identidad . " " . $query[0]->n_documento_de_identidad) ?></p>
            <p>Certifica que Evaluo el Proyecto:</p>
            <p style="font-weight: bolder;font-style: italic;font-size: 18px;"><?php print_r($query[0]->trabajo_presentado) ?></p>
            <p><?php print_r($query[0]->fecha_de_certificacion) ?></p>
        </div>
        
        <br/>
        
        <div class="w3-cell-row">

            <div class="w3-container w3-cell w3-center">
                <center>
                    
                    <!--<div style="width: 400px;border: 1px solid;margin-bottom: -15px;"></div>-->
                
                    <div class="firma" style="width: 400px;/* border: 1px solid; */margin-bottom: -15px;font-size: 11px;text-align: left;">
                        <span id="bg-text"><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p>
                            <p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p></span>
                        <p>Aprobado Digitalmente por</p><p style="text-transform: uppercase;">&nbsp;<?php print_r($query[0]->firma_1) ?></p><p>&nbsp;FUNDACIÓN UNIVERSITARIA HORIZONTE - UNIHORIZONTE</p><p>&nbsp;Autenticidad del documento</p><p>&nbsp;Bogotá - Colombia</p>
                    </div>

                </center>
                <p><?php print_r($query[0]->firma_1) ?></p>
                <p style="margin-top: -25px;font-size: 15px;"><?php print_r($query[0]->cargo_1) ?></p>
            </div>

            <div class="w3-container w3-cell w3-center">
                <center>
                    
                    <!--<div style="width: 400px;border: 1px solid;margin-bottom: -15px;"></div>-->
                    
                    <div class="firma" style="width: 400px;/* border: 1px solid; */margin-bottom: -15px;font-size: 11px;text-align: left;">
                        <span id="bg-text"><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p>
                            <p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p><p>UNIHORIZONTE</p></span>
                        <p>Aprobado Digitalmente por</p><p style="text-transform: uppercase;">&nbsp;<?php print_r($query[0]->firma_2) ?></p><p>&nbsp;FUNDACIÓN UNIVERSITARIA HORIZONTE - UNIHORIZONTE</p><p>&nbsp;Autenticidad del documento</p><p>&nbsp;Bogotá - Colombia</p>
                    </div>
                    
                    <div class="firma" style="width: 400px;/* border: 1px solid; */margin-bottom: -15px;font-size: 11px;text-align: left;">
                        <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
                    </div>
                
                </center>
                <p style="margin-top: -51px;"><?php print_r($query[0]->firma_2) ?></p>
                <p style="margin-top: -25px;font-size: 15px;"><?php print_r($query[0]->cargo_2) ?></p>
            </div>

        </div>
        
        <div class="w3-container w3-center">
            <p style="font-size: 15px;"><?php print_r($query[0]->lugar) ?></p>
        </div>
        
    </body>
    
    <script>
    
    document.addEventListener('contextmenu', event => event.preventDefault());

    $(document).keydown(function (event) {
        if (event.keyCode == 123) { // Prevent F12
            return false;
        } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
            return false;
        }
    });
    
    $(document).ready(function(){
        window.print();
    });
    
    
    </script>
    
    
</html> 
