<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Consulta extends CI_Controller {

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
    public function index() {
        
        if(isset($_POST["v1"])){
        
            $var = filter_var($_POST["v1"], FILTER_SANITIZE_STRING);
            
            $this->load->model('consultas');

            $data['query'] = $this->consultas->get_certificados($var);

            echo(json_encode($data));
            
        }
        
        if(isset($_POST["v2"])){
        
            $var = filter_var($_POST["v2"], FILTER_SANITIZE_STRING);
            
            $this->load->model('consultas');

            $data['query'] = $this->consultas->get_detalle($var);

            echo(json_encode($data));
            
        }
        
    }
    
    public function imprimir($param = 0) {
        
        if($param === 0){
            echo "No tiene permiso para acceder a este sitio.";
        }else{
            
            $this->load->model('consultas');

            $data['query'] = $this->consultas->get_imprimir($param);
            
            if(isset($data['query'][0])){
            
                switch (trim($data['query'][0]->tipo_de_evento)) {

                    case 'Curso':

                        switch (trim($data['query'][0]->rol)) {

                            case 'Organizador':
                                echo "<h1>Certificado en proceso de elaboración.</h1><p>Intente de nuevo más tarde.</p>";
                                //$this->load->view('curso_organizador', $data);
                                break;

                            case 'Asistente':
                                $this->load->view('curso_asistente', $data);
                                break;

                            case 'Ponente':
                                echo "<h1>Certificado en proceso de elaboración.</h1><p>Intente de nuevo más tarde.</p>";
                                //$this->load->view('curso_ponente', $data);
                                break;

                            case 'Ponente Central':
                                echo "<h1>Certificado en proceso de elaboración.</h1><p>Intente de nuevo más tarde.</p>";
                                //$this->load->view('curso_ponente_central', $data);
                                break;

                            case 'Poster':
                                echo "<h1>Certificado en proceso de elaboración.</h1><p>Intente de nuevo más tarde.</p>";
                                //$this->load->view('curso_poster', $data);
                                break;

                            default:
                                echo "<h1>Certificado en proceso de elaboración.</h1><p>Intente de nuevo más tarde.</p>";
                                break;
                        }


                        break;
                    
                    case 'Certificado':

                        switch (trim($data['query'][0]->rol)) {

                            case 'Organizador':
                                echo "<h1>Certificado en proceso de elaboración.</h1><p>Intente de nuevo más tarde.</p>";
                                //$this->load->view('curso_organizador', $data);
                                break;

                            case 'Asistente':
                                $this->load->view('curso_asistente', $data);
                                break;

                            case 'Ponente':
                                echo "<h1>Certificado en proceso de elaboración.</h1><p>Intente de nuevo más tarde.</p>";
                                //$this->load->view('curso_ponente', $data);
                                break;

                            case 'Ponente Central':
                                echo "<h1>Certificado en proceso de elaboración.</h1><p>Intente de nuevo más tarde.</p>";
                                //$this->load->view('curso_ponente_central', $data);
                                break;

                            case 'Poster':
                                echo "<h1>Certificado en proceso de elaboración.</h1><p>Intente de nuevo más tarde.</p>";
                                //$this->load->view('curso_poster', $data);
                                break;

                            default:
                                echo "<h1>Certificado en proceso de elaboración.</h1><p>Intente de nuevo más tarde.</p>";
                                break;
                        }


                        break;

                    case 'Encuentro':

                        switch (trim($data['query'][0]->rol)) {

                            case 'Organizador':
                                $this->load->view('encuentro_organizador', $data);
                                break;

                            case 'Asistente':
                                $this->load->view('encuentro_asistente', $data);
                                break;

                            case 'Ponente':
                                $this->load->view('encuentro_ponente', $data);
                                break;

                            case 'Ponente Central':
                                $this->load->view('encuentro_ponente_central', $data);
                                break;

                            case 'Poster':
                                $this->load->view('encuentro_poster', $data);
                                break;

                            case 'Primer Puesto':
                                echo "<h1>Certificado en proceso de elaboración.</h1><p>Intente de nuevo más tarde.</p>";
                                //$this->load->view('encuentro_puesto', $data);
                                break;

                            case 'Segundo Puesto':
                                echo "<h1>Certificado en proceso de elaboración.</h1><p>Intente de nuevo más tarde.</p>";
                                //$this->load->view('encuentro_puesto', $data);
                                break;

                            default:
                                echo "<h1>Certificado en proceso de elaboración.</h1><p>Intente de nuevo más tarde.</p>";
                                break;
                        }

                        break;
                        
                    case 'Diplomado':

                        switch (trim($data['query'][0]->rol)) {

                            case 'Organizador':
                                $this->load->view('encuentro_organizador', $data);
                                break;

                            case 'Asistente':
                                $this->load->view('diplomado_asistente', $data);
                                break;

                            case 'Ponente':
                                $this->load->view('encuentro_ponente', $data);
                                break;

                            case 'Ponente Central':
                                $this->load->view('encuentro_ponente_central', $data);
                                break;

                            case 'Poster':
                                $this->load->view('encuentro_poster', $data);
                                break;

                            case 'Primer Puesto':
                                echo "<h1>Certificado en proceso de elaboración.</h1><p>Intente de nuevo más tarde.</p>";
                                //$this->load->view('encuentro_puesto', $data);
                                break;

                            case 'Segundo Puesto':
                                echo "<h1>Certificado en proceso de elaboración.</h1><p>Intente de nuevo más tarde.</p>";
                                //$this->load->view('encuentro_puesto', $data);
                                break;

                            default:
                                echo "<h1>Certificado en proceso de elaboración.</h1><p>Intente de nuevo más tarde.</p>";
                                break;
                        }

                        break;
                        
                        
                    default:

                        echo "<h1>Certificado en proceso de elaboración.</h1><p>Intente de nuevo más tarde.</p>";

                        break;
                }
                
            }else{
                
                echo "<h1>No existe información.</h1><p>Verifique el código e intente de nuevo más tarde.</p>";
                
                die;

            }
            
        }
        
    }
    
}
