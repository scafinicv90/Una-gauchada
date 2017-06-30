<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PostulacionModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    public function agregarPostulacion($postulacion)
    {
        $this->db->insert('usuarios_has_favor_postulacion', $postulacion);
    }
    
    public function obtenerPostulacion($id_usuario,$id_favor)
    {
        $this->db->where('usuarios_id_usuario',$id_usuario);
        $this->db->where('favor_id_favor',$id_favor);
        $query=$this->db->get('usuarios_has_favor_postulacion');
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }
    public function eliminarPostulacion($id_favor,$id_usuario)
    {
        $this->db->where('usuarios_id_usuario',$id_usuario);
        $this->db->where('favor_id_favor',$id_favor);
        $this->db->delete('usuarios_has_favor_postulacion');
    }
    public function obtenerPostulaciones($id_usuario)
    {
        $this->db->from('favor');
        $this->db->join('usuarios_has_favor_postulacion','usuarios_has_favor_postulacion.favor_id_favor=favor.id_favor');
        $this->db->where('usuarios_has_favor_postulacion.usuarios_id_usuario=',$id_usuario);
        $query=$this->db->get();
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }

    public function obtenerPostulantes($id_favor) {
        $this->db->from('usuarios');
        $this->db->join('usuarios_has_favor_postulacion', 'usuarios_has_favor_postulacion.usuarios_id_usuario = usuarios.id_usuario');
        $this->db->where('usuarios_has_favor_postulacion.favor_id_favor=', $id_favor);
        $query = $this->db->get();
        if($query->num_rows() > 0) {
            return($query);
        } else {
            return(false);
        }
    }
}