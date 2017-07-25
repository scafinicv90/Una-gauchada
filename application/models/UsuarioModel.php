<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UsuarioModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function obtenerUsuarios()
    {
        $query = $this->db->get('usuarios');
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }

    public function buscarUsuario($emailUser)
    {
        $this->db->where('email', $emailUser);
        $query = $this->db->get('usuarios');
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }

    public function buscarUsuarioId($idUser)
    {
        $this->db->where('id_usuario', $idUser);
        $query = $this->db->get('usuarios');
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }

    public function obtenerCreditos($email)
    {   
        $query = $this->db->select('credito');
        $query = $this->db->where('email', $email);
        $query = $this->db->get('usuarios');
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }

    public function agregarUsuario($emailUser)
    {
        $this->db->insert('usuarios', $emailUser);

    }

    public function modificarUsuario($id_usuario, $data) {
        $this->db->update('usuarios', $data);
        $this->db->where('id_usuario', $id_usuario);
    }

}
