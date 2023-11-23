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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- jquery -->
    <script src="http://virtual.unihorizonte.edu.co:9000/proyectosunihorizonte/assets/js/jquery.min.js"></script>

    <style>
        html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}


        .w3-theme-d2 {
            color: #fff !important;
            background-color: #e66110 !important;
        }


        .w3-theme-d4 {
            color: #fff !important;
            background-color: #00376D !important;
        }

        .d-md-none.hidden-desktop.hidden-tablet {
            display: none;
        }

        .w3-theme-l1 {
            color: #fff !important;
            background-color: #00376d !important;
        }

        .w3-red, .w3-hover-red:hover {
            color: #fff!important;
            background-color: #e66110!important;
        }

    </style>
    <body class="w3-theme-l5">

        <!-- Navbar -->
        <div class="w3-top">
            <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
                
                <a href="" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>
                    <img src="https://www.unihorizonte.edu.co/test/newsite/assets/img/unihorizonte-logo-h70px-white.png" style="max-width: 130px;"></a>
                <a target='_blank' href="https://unihorizonte.edu.co/" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Web"><i class="fa fa-globe"></i></a>
                <a href="https://login.microsoftonline.com/" target="_blank" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Correo Institucional"><i class="fa fa-envelope"></i></a>

            </div>
        </div>

        <!-- Page Container -->
        <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
            <!-- The Grid -->
            <div class="w3-row">
                <!-- Left Column -->
                <div class="w3-col m12">
                    <!-- Profile -->
                    <div class="w3-card w3-round w3-white">
                        <div class="w3-container" style="min-height: 600px;">

                            <div class="w3-container">

                                <br/>

                                <div class="w3-row">
                                    <a href="javascript:void(0)" onclick="openCity(event, 'London');">
                                        <div class="w3-half tablink w3-bottombar w3-hover-light-grey w3-padding w3-center w3-theme-d4">Ver mis certificados de educación contínua</div>
                                    </a>
                                    <a href="javascript:void(0)" onclick="openCity(event, 'Paris');">
                                        <div class="w3-half tablink w3-bottombar w3-hover-light-grey w3-padding w3-center">Consultar un certificado de educación contínua</div>
                                    </a>

                                </div>
                                
                                <div id="London" class=" city" style="display:inherit">

                                    <br/>

                                    <div class="w3-card-4">
                                        <div class="w3-container w3-theme-d2">
                                            <h2>Digite su número de documento</h2>
                                        </div>
                                        <form id="form1" class="w3-container">
                                            
                                            <br>
                                            
                                            <p>
                                                
                                                <label>
                                                    <b>Tipo de documento</b>
                                                </label>
                                                <br>
                                                <input id="cc" class="w3-radio" type="radio" name="documento" value="cc" checked="">
                                                <label>C.C.</label>
                                                <br>
                                                <input id="ti" class="w3-radio" type="radio" name="documento" value="ti">
                                                <label>T.I.</label>
                                                <br>
                                                <input id="ce" class="w3-radio" type="radio" name="documento" value="ce">
                                                <label>C.E.</label>
                                            </p>
                                            
                                            <br>
                                            
                                            <p>      
                                                <label><b>Número de documento</b></label>
                                                <input class="w3-input w3-border" name="doc" type="number" min="1" required="">
                                            </p>

                                            <p>
                                                <button class="w3-btn w3-theme-d4">Buscar</button>
                                            </p>
                                        </form>
                                    </div>

                                    <br/>

                                    <div id="results1" class="w3-card-4" style="display:none">
                                        <div class="w3-container w3-theme-d4">
                                            <h2>Sus certificados</h2>
                                        </div>

                                        <table id="table1" class="w3-table-all w3-hoverable"></table>
                                        
                                    </div>

                                </div>

                                <div id="Paris" class=" city" style="display:none">
                                    
                                    <br/>

                                    <div class="w3-card-4">
                                        <div class="w3-container w3-theme-d2">
                                            <h2>Digite el código del certificado</h2>
                                        </div>
                                        <form id="form2" class="w3-container">
                                            <p>      
                                                <label><b>Código</b></label>
                                                <input class="w3-input w3-border" name="cod" type="text" required="">
                                            </p>

                                            <p>
                                                <button class="w3-btn w3-theme-d4">Buscar</button>
                                            </p>
                                        </form>
                                    </div>

                                    <br/>

                                    <div id="results2" class="w3-card-4" style="display:none">
                                        <div class="w3-container w3-theme-d4">
                                            <h2>Detalle</h2>
                                        </div>

                                        <table id="table2" class="w3-table-all w3-hoverable"></table>
                                        
                                    </div>
                                    
                                </div>

                                <br/>

                            </div>

                        </div>
                    </div>
                    <br>



                    <!-- End Left Column -->
                </div>

            </div>

            <!-- End Grid -->
        </div>

        <!-- End Page Container -->
    </div>
    <br>

    <!-- Footer -->
    <footer class="w3-container w3-theme-d3 w3-padding-16">


        <div class="w3-cell-row">
            <div class="w3-container w3-cell w3-mobile w3-center">
                <img width="280" src="https://www.unihorizonte.edu.co/test/newsite/assets/img/unihorizonte-logo-sello-v1-ol-min.png" class="w-80">
            </div>
            <div class="w3-container w3-cell w3-mobile w3-center">
                <!-- middle content -->
            </div>
            <div class="w3-container w3-cell w3-mobile w3-center">

                <table border="0" style="width: auto;" align="center">
                    <tbody>
                        <tr>
                            <td style="text-align: center;"><span style="color: #e74c19;">CONTÁCTENOS</span></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">
                                <p><span style="color: #ffffff; font-family: helvetica; font-size: 10pt;">Linea de Servicio: 018000187197</span><br><span style="color: #ffffff; font-family: helvetica; font-size: 10pt;">admisiones@unihorizonte.edu.co </span><br><span style="color: #ffffff; font-family: helvetica; font-size: 10pt;">Whatsapp: 321 9208288 PBX:7437270</span></p>
                                <p><span style="text-align: center; font-family: helvetica; color: #ffffff; font-size: 10pt;">Para peticiones, quejas o reclamos, escríbenos a:</span><br style="text-align: center;"><span style="text-align: center; font-family: helvetica; color: #ffffff; font-size: 10pt;">servicioalusuario@unihorizonte.edu.co</span></p>
                                <p><span style="font-family: helvetica; color: #ffffff; font-size: 10pt;">&nbsp;Calle 69 # 14 - 30 Bogotá - Colombia</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><span style="font-size: 10pt; color: #000000;"><strong><span style="color: #ffffff;">Vigilado Mineducación</span></strong></span></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>


    </footer>

    <footer class="w3-container w3-theme-d5">
        <p>Direccion de Tecnología <a href="https://www.unihorizonte.edu.co" target="_blank">UniHorizonte</a></p>
    </footer>

    <script>

        function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-theme-d4", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.firstElementChild.className += " w3-theme-d4";
        }

        $("input[name='documento']").on("change", function(){
            
            switch ($("input[name='documento']:checked").val()) {
                case "ce":
                    $("input[name='doc']").attr("type", "text");
                    $("input[name='doc']").attr("minlength", "4");
                    break;

                default:
                    $("input[name='doc']").attr("type", "number");
                    break;
            }
            
        });


        $('#form1').submit(function (event) {

            event.preventDefault();

            $.ajax({
                type: "POST",
                data: {
                    v1 : document.querySelector("#form1 input[name='doc']").value
                },
                dataType: "json",
                url: "/certificados/consulta",
                })
                .done(function( data, textStatus, jqXHR ) {

                    var size = data.query.length;

                    if(size === 0){
                        alert("El documento ingresado no tiene certificados asociados.");
                    }else{

                        var html = "<tr><th>#</th><th class='w3-hide-small'>Nombre del participante</th><th>Trabajo presentado</th><th class='w3-hide-small'>Rol</th><th>Ver</th></tr>";

                        for(var i = 0 ; i < size ; i++){

                            html += "<tr><td>" 
                                    + (i+1) + "</td><td class='w3-hide-small'>" 
                                    + data.query[i].nombre_del_participante + "</td><td>" 
                                    + data.query[i].trabajo_presentado + "</td><td class='w3-hide-small'>" 
                                    + data.query[i].rol + "</td><td><a href='/certificados/consulta/imprimir/" 
                                    + data.query[i].codigo_unico + "' class='w3-btn w3-green' target=_blank><i class='fas fa-eye'></a></i></td></tr>";

                        }

                        $("#table1").html(html);

                        $("#results1").css("display", "");

                    }

                })
                .fail(function( jqXHR, textStatus, errorThrown ) {
                 if ( console && console.log ) {
                     console.log( "La solicitud a fallado: " +  textStatus);
                 }
            });


        });
        
        
        $('#form2').submit(function (event) {

            event.preventDefault();

            $.ajax({
                type: "POST",
                data: {
                    v2 : document.querySelector("#form2 input[name='cod']").value
                },
                dataType: "json",
                url: "/certificados/consulta",
                })
                .done(function( data, textStatus, jqXHR ) {
                    
                    var size = data.query.length;
                    
                    if(size === 0){
                        alert("El código ingresado no tiene certificados asociados.");
                    }else{
                        
                        var html = "<tr><th>#</th><th class='w3-hide-small'>Nombre del participante</th><th class='w3-hide-small'>Documento</th><th>Trabajo presentado</th><th class='w3-hide-small'>Rol</th><th>Ver</th></tr>";
                        
                        for(var i = 0 ; i < size ; i++){
                            
                            html += "<tr><td>" 
                                    + (i+1) + "</td><td class='w3-hide-small'>" 
                                    + data.query[i].nombre_del_participante + "</td><td class='w3-hide-small'>" 
                                    + data.query[i].tipo_de_documento_de_identidad + " " + data.query[i].n_documento_de_identidad + "</td><td>" 
                                    + data.query[i].trabajo_presentado + "</td><td class='w3-hide-small'>" 
                                    + data.query[i].rol + "</td><td><a href='/certificados/consulta/imprimir/" 
                                    + data.query[i].codigo_unico + "' class='w3-btn w3-green' target=_blank><i class='fas fa-eye'></a></i></td></tr>";
                            
                        }
                        
                        $("#table2").html(html);
                        
                        $("#results2").css("display", "");
                        
                    }
                    
                })
                .fail(function( jqXHR, textStatus, errorThrown ) {
                 if ( console && console.log ) {
                     console.log( "La solicitud a fallado: " +  textStatus);
                 }
            });

        });
        
        $("#form1 input[name='doc']").focus(function(){
            
            $("#results1").css("display", "none");
        
        });
        
        $("#form2 input[name='cod']").focus(function(){
            
            $("#results2").css("display", "none");
        
        });

    </script>

</body>
</html> 
