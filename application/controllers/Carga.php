<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Carga extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function upload($param = 0) {
        
        // 23a141bc8a1f5b69064ab6572e89651f61dd0ac3
        $fixed = sha1("Horizonte.54");
        
        if(strcasecmp($param, $fixed) == 0){
            
            //print_r("Adelante");
            
            if(file_exists("tmp/subir.csv")){
            
                $myfile = fopen("tmp/subir.csv", "r") or die("No pude abrirlo ='(");
                
                $campos = array(
                    "id", 
                    "fondo",
                    "organizador",
                    "rol",
                    "tipo_de_evento",
                    "trabajo_presentado",
                    "nombre_del_evento",
                    "duracion",
                    "lugar",
                    "fecha_de_certificacion",
                    "nombre_del_participante",
                    "tipo_de_documento_de_identidad",
                    "n_documento_de_identidad",
                    "firma_1",
                    "cargo_1",
                    "firma_2",
                    "cargo_2",
                    "validado_por_1",
                    "fecha_1",
                    "validado_por_2",
                    "fecha_2",
                    "codigo_unico",
                    "timestamp"
                );
                
                $fila = array();
                
                $todo = array();
                
                // Output one line until end-of-file
                while(!feof($myfile)) {
                    
                   $line = fgets($myfile);
                   $line = explode("|", $line);
                   
                   // Quita espacios innecesarios
                   foreach ($line as $key => $value) {
                       
                       switch ($campos[$key]) {
                           case "codigo_unico":


                               break;

                           default:
                               $subir[$campos[$key]] = trim(preg_replace('/\s\s+/', ' ', $value));
                               break;
                       }
                       
                   }
                   
                   $todo[] = $subir;
                  
                }
                
                print_r(json_encode($todo));
                
                fclose($myfile);
                
            }else{
                print_r("Error: No hay material...");
            }
            
        }else{
            print_r("Error");
        }
        
    }
    
}
