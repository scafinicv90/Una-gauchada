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

    public function cancelarPostulacion($id_favor, $id_usuario)
    {
        $data = array(
            'usuarios_id_usuario' => $id_usuario,
            'favor_id_favor' => $id_favor,
            'estado' => 3);
        $this->db->where('usuarios_id_usuario', $id_usuario);
        $this->db->where('favor_id_favor', $id_favor);
        $this->db->update('usuarios_has_favor_postulacion', $data );
    }
    public function eliminarPostulacion($id_favor, $id_usuario)
    {
        $this->db->where('usuarios_id_usuario', $id_usuario);
        $this->db->where('favor_id_favor', $id_favor);
        $this->db->delete('usuarios_has_favor_postulacion');
    }

    public function confirmarPostulacion($id_favor, $id_usuario) {
        $data = array(
            'usuarios_id_usuario' => $id_usuario,
            'favor_id_favor' => $id_favor,
            'estado' => 2);
        $this->db->where('usuarios_id_usuario', $id_usuario);
        $this->db->where('favor_id_favor', $id_favor);
        $this->db->update('usuarios_has_favor_postulacion', $data);
    }
    public function confirmarCalificacionU($id_favor, $id_usuario)
    {
         $data = array(
            'usuarios_id_usuario' => $id_usuario,
            'favor_id_favor' => $id_favor,
            'estadoU' => 1);
        $this->db->where('usuarios_id_usuario', $id_usuario);
        $this->db->where('favor_id_favor', $id_favor);
        $this->db->update('usuarios_has_favor_postulacion', $data);
    }
     public function confirmarCalificacionD($id_favor, $id_usuario)
    {
         $data = array(
            'usuarios_id_usuario' => $id_usuario,
            'favor_id_favor' => $id_favor,
            'estadoD' => 1);
        $this->db->where('usuarios_id_usuario', $id_usuario);
        $this->db->where('favor_id_favor', $id_favor);
        $this->db->update('usuarios_has_favor_postulacion', $data);

        // $this->db->set('estadoD', 'estadoD+1');
        // $this->db->where('usuarios_id_usuario', $id_usuario);
        // $this->db->where('favor_id_favor', $id_favor);
        // $this->db->update('usuarios_has_favor_postulacion');
    }


    public function obtenerPostulaciones($id_usuario)
    {
        $this->db->from('favor');
        $this->db->join('usuarios_has_favor_postulacion','usuarios_has_favor_postulacion.favor_id_favor=favor.id_favor');
        $this->db->where('usuarios_has_favor_postulacion.usuarios_id_usuario=',$id_usuario);
        $this->db->where('favor.fecha_limite >=', date("Y-m-d"));
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
        $this->db->where('usuarios_has_favor_postulacion.estado <>', 3);
        $query = $this->db->get();
        if($query->num_rows() > 0) {
            return($query);
        } else {
            return(false);
        }
    }
    public function crearCalificacion($calificacion)
    {
        $this->db->insert('calificacion', $calificacion);
    }

    public function actualizarReputacionMenos($id)
    {
        $this->db->set('reputacion', 'reputacion-2', FALSE);
        $this->db->where('id_usuario', $id);
        $this->db->update('usuarios'); 
    }
    public function actualizarReputacionMas($id)
    {
        $this->db->set('reputacion', 'reputacion+1', FALSE);
        $this->db->where('id_usuario', $id);
        $this->db->update('usuarios'); 
    }
}