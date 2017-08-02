<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdministradorModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function agregarCategoria($nombre)
    {
        $this->db->set('nombre', $nombre);
        $this->db->insert('categorias');
    }

    public function obtenerCategoriaID($idcat)
    {
        $this->db->where('id_categoria', $idcat);
        $query = $this->db->get('categorias');
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }
    public function modificarCategoria($nombre, $idcat)
    {
        $this->db->set('nombre', $nombre);
        $this->db->where('id_categoria', $idcat);
        $this->db->update('categorias');
    }
    public function obtenerFC($idcat)
    {
        $this->db->where('categorias_id_categoria', $idcat);
        $query = $this->db->get('favor_has_categorias');
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }
    public function eliminarCategoria($idcat)
    {
        $this->db->where('id_categoria', $idcat);
        $this->db->delete('categorias');
    }

}
