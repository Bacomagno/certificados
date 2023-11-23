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
            <p style="margin-top: 176px;font-size: 31px;">Certifica que:</p>
            <p style="font-weight: bolder;font-size: 34px;margin-top:-40px;"><?php print_r($query[0]->nombre_del_participante) ?></p>
            <p style="font-weight: bolder;margin-top: -50px;font-size: 34px;"><?php print_r($query[0]->tipo_de_documento_de_identidad . " " . $query[0]->n_documento_de_identidad) ?></p>
            <p style="margin-top: 0px;font-size: 31px;">Aprobó el diplomado de:</p>
            <p style="margin-top: -35px;font-size: 34px;font-weight: bolder;"><?php print_r($query[0]->nombre_del_evento) ?></p>
            <p style="positon:absolute;margin-top: 41px;font-size: 31px;">Con una intensidad de <?php print_r($query[0]->duracion) ?></p>
            <p style="margin-top: -60px;font-size: 31px;font-weight: bolder;">&nbsp;</p>
            
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
        
        <br/>
        
        <div class="w3-container w3-center">
            <p style="font-size: 22px;margin-top: -1px;"><?php print_r((strcmp($query[0]->rol, "Ponencia" == 0) ? $query[0]->fecha_de_certificacion : $query[0]->duracion)      ) ?>, <?php print_r($query[0]->lugar) ?></p>
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