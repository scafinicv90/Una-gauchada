<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
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
    public function buscarCategoria()
    {
        $query = $this->db->get('categoria');
        return ($query);
    }

}
