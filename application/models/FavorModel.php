<?php

defined('BASEPATH') or exit('No direct script access allowed');

class FavorModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    public function agregarFavor($gauchada)
    {
        $this->db->insert('favor', $gauchada);

    }
    public function agregarImagen($img,$id_usuario,$id_favor)
    {
        $insert = array("img" => $img,
        "id_usuario" => $id_usuario,
        "id_favor" =>$id_favor);

        $this->db->insert("imagenes",$insert);
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
    public function obtenerKeyFavor()
    {
        // SELECT `AUTO_INCREMENT`
        // FROM  INFORMATION_SCHEMA.TABLES
        // WHERE TABLE_SCHEMA = 'DatabaseName'
        // AND   TABLE_NAME   = 'TableName';
        $this->db->select('AUTO_INCREMENT');
        $this->db->from('INFORMATION_SCHEMA.TABLES');
        $this->db->where('TABLE_SCHEMA','gauchada');
        $this->db->where('TABLE_NAME' ,'favor');
        $query=$this->db->get();
        return($query);


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
    }

    public function obtenerFavorC($id)
    {
        $this->db->select('*');
        $this->db->from('favor');
        $this->db->join('imagenes', 'imagenes.id_favor=favor.id','left');
        $this->db->where('id', $id);
        $query= $this->db->get();
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }


    public function obtenerComentarios($id_favor)
    {
        $this->db->select('comentario.descripcion, comentario.id_respuesta , comentario.id_comentario,usuario.nombre');
        $this->db->from('favor');
        $this->db->join('favor_comentario', 'favor.id = favor_comentario.favor_id' ,'right');
        $this->db->join('comentario', 'comentario.id_comentario = favor_comentario.comentario_id' ,'right');
        $this->db->join('usuario','usuario.id_usuario=comentario.id_usuario');
        $this->db->where('id',$id_favor);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }
    public function restarCredito($email)
    {
        $this->db->set('credito', 'credito-1', false);
        $this->db->where('email', $email);
        $this->db->update('usuario');

    }
    public function buscarCategoria()
    {
        $query = $this->db->get('categoria');
        return ($query);
    }
    public function buscarFavores()
    {

        $this->db->select('*');
        $this->db->from('favor');
        $this->db->join('usuario','favor.id_usuario=usuario.id_usuario');
        $this->db->join('imagenes', 'imagenes.id_favor=favor.id','left');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }

        //$query = $this->db->get('favor');
        /* para el dia que lo tenga que ordenar, esto es un ejemplo
        $this->db->order_by('title', 'DESC');
        $this->db->order_by('name', 'ASC');*/
        // return ($query);
    }

}
