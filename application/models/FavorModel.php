<?php

defined('BASEPATH') or exit('No direct script access allowed');

class FavorModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }
    public function obtenerFavor($id)
    {
        $query = $this->db->where('id', $id);
        $query = $this->db->get('favor');
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
        return ($query);
    }

    // public function obtenerComentarios($id_comentarios)
    // {
    //     $array = array();
    //     foreach ($id_comentarios as $key => $value) {
    //         $query=$this->db->where('id_comentario', $value['comentario_id']);
    //         $query = $this->db->get('comentario');
    //         $array[$key] = $query->result() ;
    //     };
    //     return $array;

    // }
    public function preObtenerComentarios($id_favor,$id_usuario)
    {
        // var_dump('entre');die();
        $this->db->select('comentario.descripcion, comentario.id_respuesta , comentario.id_comentario,usuario.nombre');
        $this->db->from('favor');
        $this->db->join('favor_comentario', 'favor.id = favor_comentario.favor_id' ,'right');
        $this->db->join('comentario', 'comentario.id_comentario = favor_comentario.comentario_id' ,'right');
        $this->db->join('usuario','usuario.id_usuario=comentario.id_usuario');
        $this->db->where('id',$id_favor);
        $query = $this->db->get();
        // var_dump($query->result());die();
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
    public function agregarFavor($gauchada)
    {
        $this->db->insert('favor', $gauchada);

    }
    public function restarCredito($email)
    {
        $this->db->set('credito', 'credito-1', false);
        $this->db->where('email', $email);
        $this->db->update('usuario');

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
