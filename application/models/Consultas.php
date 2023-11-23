<?php

class Consultas extends CI_Model {

    public function get_certificados($documento = 0) {
        $this->db->select('nombre_del_evento,trabajo_presentado,nombre_del_participante,tipo_de_evento,codigo_unico,rol');
        $query = $this->db->get_where('certificaciones', array('n_documento_de_identidad' => $documento));
        $this->db->order_by('timestamp', 'DESC');
        return $query->result();
    }
    
    public function get_imprimir($codigo = 0) {        			
        $this->db->select(''
                /*. 'id,'*/
                . 'fondo,'
                /*. 'logo_uh,'*/
                /*. 'logo_mineducacion,'*/
                . 'organizador,rol,'
                . 'tipo_de_evento,'
                . 'trabajo_presentado,'
                . 'nombre_del_evento,'
                . 'duracion,lugar,'
                . 'fecha_de_certificacion,'
                . 'nombre_del_participante,'
                . 'tipo_de_documento_de_identidad,'
                . 'n_documento_de_identidad,'
                /*. 'txt_tomo_curso,'*/
                /*. 'nombre_curso,'*/
                . 'firma_1,cargo_1,'
                . 'firma_2,cargo_2,'
                /*. 'validado_por_1,fecha_1,'*/
                /*. 'validado_por_2,fecha_2,'*/
                /*. 'ciudad,'*/
                . 'codigo_unico');
        $query = $this->db->get_where('certificaciones', array('codigo_unico' => $codigo));
        return $query->result();
    }
    
    public function get_detalle($codigo = 0) {
        $this->db->select('tipo_de_evento,nombre_del_participante,tipo_de_documento_de_identidad,n_documento_de_identidad,nombre_del_evento,trabajo_presentado,duracion,codigo_unico,rol');
        $query = $this->db->get_where('certificaciones', array('codigo_unico' => $codigo));
        $this->db->order_by('timestamp', 'DESC');
        return $query->result();
    }

}
