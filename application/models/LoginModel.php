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
    public function agregarUsuario($emailUser)
    {
        $this->db->insert('usuario', $emailUser);

    }
    public function buscarCategoria()
    {
        $query = $this->db->get('categoria');
        return ($query);
    }
    public function agregarFavor($gauchada)
    {
        $this->db->insert('favor', $gauchada);

    }
    public function agregarFC($categoria)
    {
        $query = $this->db->insert_id();
        foreach ($categoria as $cat) {
            $this->db->set('id_favor', $query);
            $this->db->set('id_categoria', $cat);
            $this->db->insert('favor_categoria');
        }

    }
    public function buscarFavores()
    {
        $query = $this->db->get('favor');
        /* para el dia que lo tenga que ordenar, esto es un ejemplo
        $this->db->order_by('title', 'DESC');
        $this->db->order_by('name', 'ASC');*/
        return ($query);
    }
}
