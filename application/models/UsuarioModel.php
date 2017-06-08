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
        $query = $this->db->get('usuario');
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }
    public function buscarUsuario($emailUser)
    {
        $this->db->where('email', $emailUser);
        $query = $this->db->get('usuario');
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
        $query = $this->db->get('usuario');
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }
    public function agregarUsuario($emailUser)
    {
        $this->db->insert('usuario', $emailUser);

    }

}
