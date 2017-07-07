<?php

defined('BASEPATH') or exit('No direct script access allowed');

class BuscadorModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }
    public function obtenerPorTitulo($titulo,$id_usuario)
    {
        // $this->db->select('*');
        $this->db->from('favor');
        $this->db->join('usuarios', 'usuarios.id_usuario=favor.id_usuario');
        $this->db->where('favor.fecha_limite >=', date("Y-m-d") );
        $this->db->where('usuarios.id_usuario !=',$id_usuario);
        $this->db->like('titulo', $titulo);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }
    public function obtenerPorCiudad($ciudad,$id_usuario)
    {
        $this->db->from('favor');
        $this->db->join('usuarios', 'usuarios.id_usuario=favor.id_usuario');
        $this->db->where('favor.fecha_limite >=', date("Y-m-d") );
        $this->db->where('usuarios.id_usuario !=',$id_usuario);
        $this->db->like('favor.ciudad', $ciudad);
        $query = $this->db->get();
        var_dump($query->result());
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }
    public function obtenerPorCategoria($id_categoria,$id_usuario)
    {
        $this->db->from('categorias');
        $this->db->join('favor_has_categorias','favor_has_categorias.categorias_id_categoria = categorias.id_categoria');
        $this->db->join('favor', 'favor.id_favor= favor_has_categorias.favor_id_favor');
        $this->db->join('usuarios', 'favor.id_usuario=usuarios.id_usuario');
        $this->db->where('id_categoria', $id_categoria);
        $this->db->where('favor.fecha_limite >=', date("Y-m-d") );
        $this->db->where('favor.id_usuario !=',$id_usuario);
        $query=$this->db->get();
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }

    public function obtenerPorTyC($ciudad,$titulo,$id_usuario)
    {
        $this->db->from('favor');
        $this->db->join('usuarios', 'favor.id_usuario=usuarios.id_usuario');
        $this->db->where('favor.fecha_limite >=', date("Y-m-d") );
        $this->db->where('favor.id_usuario !=',$id_usuario);
        $this->db->like('titulo', $titulo);
        $this->db->like('ciudad', $ciudad);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }
    public function obtenerPorTyCategoria($titulo,$categoria,$id_usuario)
    {
        $this->db->from('categorias');
        $this->db->join('favor_has_categorias','favor_has_categorias.categorias_id_categoria = categorias.id_categoria');
        $this->db->join('favor', 'favor.id_favor= favor_has_categorias.favor_id_favor');
        $this->db->join('usuarios', 'usuarios.id_usuario=favor.id_usuario');

        $this->db->where('usuarios.id_usuario !=',$id_usuario);
        $this->db->where('favor.fecha_limite >=', date("Y-m-d") );
        $this->db->like('favor.titulo', $titulo);
        $this->db->where('categorias.nombre =', $categoria);
        $query=$this->db->get();
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }
    public function obtenerPorCyC($categoria,$ciudad,$id_usuario)
    {
        $this->db->from('categorias');
        $this->db->join('favor_has_categorias','favor_has_categorias.categorias_id_categoria = categorias.id_categoria');
        $this->db->join('favor', 'favor.id_favor= favor_has_categorias.favor_id_favor');
        $this->db->join('usuarios', 'favor.id_usuario=usuarios.id_usuario');

        $this->db->where('categorias.nombre', $categoria);
        $this->db->where('favor.id_usuario !=',$id_usuario);
        $this->db->like('favor.ciudad', $ciudad);
        $this->db->where('favor.fecha_limite >=', date("Y-m-d") );
        $query=$this->db->get();
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }


    public function obtenerPorTres($ciudad,$categoria,$titulo,$id_usuario)
    {
        $this->db->from('categorias');
        $this->db->join('favor_has_categorias','favor_has_categorias.categorias_id_categoria = categorias.id_categoria');
        $this->db->join('favor', 'favor.id_favor= favor_has_categorias.favor_id_favor');
        $this->db->join('usuarios', 'favor.id_usuario=usuarios.id_usuario');

        $this->db->where('categorias.nombre =', $categoria);

        $this->db->where('favor.id_usuario !=',$id_usuario);
        $this->db->where('favor.fecha_limite >=', date("Y-m-d") );
        $this->db->like('favor.ciudad', $ciudad);
        $this->db->like('favor.titulo', $titulo);
        $query=$this->db->get();
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }

}