<?php

defined('BASEPATH') or exit('No direct script access allowed');

class FavorModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    public function agregarFavor($gauchada)/*falta probar*/
    {
        $this->db->insert('favor', $gauchada);
        $query = $this->db->insert_id();
        return $query;

    }
    public function agregarImagen($img,$id_favor)/*falta probar*/
    {
        $insert = array("img" => $img,
            "favor_id"            => $id_favor);

        $this->db->insert("imagenes", $insert);
    }
    public function agregarComentario($query)/*falta probar*/
    {
        $this->db->insert('comentarios',$query);
    }
    public function agregarRespuesta($query)/*falta probar*/
    {
        $this->db->insert('respuestas',$query);
    }
    public function updateComentario($id_comentario)/*falta probar*/
    {
        $query = $this->db->insert_id();
        $update = array("id_respuesta" => $query);
        $this->db->where('id_comentario',$id_comentario);
        $this->db->update("comentarios",$update);
    }

    public function agregarFC($categoria, $id_favor)/*falta probar*/
    {
        // foreach ($categoria as $cat) {
            $this->db->set('favor_id_favor', $id_favor);
            $this->db->set('categorias_id_categoria', $categoria);
            $this->db->insert('favor_has_categorias');
        // }

    }
    public function obtenerKeyFavor()/*falta probar*/
    {
        // SELECT `AUTO_INCREMENT`
        // FROM  INFORMATION_SCHEMA.TABLES
        // WHERE TABLE_SCHEMA = 'DatabaseName'
        // AND   TABLE_NAME   = 'TableName';
        $this->db->select('AUTO_INCREMENT');
        $this->db->from('INFORMATION_SCHEMA.TABLES');
        $this->db->where('TABLE_SCHEMA', 'gauchada');
        $this->db->where('TABLE_NAME', 'favor');
        $query = $this->db->get();
        return ($query);

    }
    public function obtenerFavor($id)
    {
        $query = $this->db->where('id_favor', $id);
        $query = $this->db->get('favor');
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }
    public function obtenerCiudades()
    {
        $query = $this->db->get('localidades');
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }
    public function obtenerFavores()
    {

        $this->db->select('*');
        $this->db->from('favor');
        $this->db->join('usuarios', 'favor.id_usuario=usuarios.id_usuario');
        $this->db->where('favor.fecha_limite >=', date("Y-m-d") );
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }
    public function obtenerPostulantes($id_favor)
    {
        $this->db->from('favor');
        $this->db->join('usuarios_has_favor_postulacion', 'usuarios_has_favor_postulacion.favor_id_favor=favor.id_favor');
        $this->db->where('favor.fecha_limite >=', date("Y-m-d") );
        $this->db->where('favor.id_favor=',$id_favor);

        $query=$this->db->count_all_results();
        if ($query > 0) {
            return ($query);
        } else {
            return (0);
        }
    }
    public function obtenerFavorUsuario($id)
    {
        $this->db->select('*');
        $this->db->from('favor');
        $this->db->join('usuarios', 'usuarios.id_usuario=favor.id_usuario');
        $this->db->where('id_favor', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }
    public function obtenerImagenesId($id_favor)
    {
        $this->db->select('*');
        $this->db->from('imagenes');
        $this->db->where('favor_id', $id_favor);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }
    public function obtenerImagenes()
    {
        $this->db->select('*');
        $this->db->from('imagenes');
        $query = $this->db->get();
        // var_dump($query->result());die();
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }

    public function obtenerComentarios($id_favor)
    {
        $this->db->select('comentarios.descripcion, comentarios.id_respuesta , comentarios.id_comentario,usuarios.nombre');
        $this->db->from('comentarios');
        $this->db->join('usuarios', 'usuarios.id_usuario = comentarios.usuario_id');
        $this->db->where('favor_id', $id_favor);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }
    public function obtenerRespuestas($id_favor)
    {
        $this->db->select('respuestas.respuesta,respuestas.usuarios_id,respuestas.id_comentario');
        $this->db->from('favor');
        $this->db->join('comentarios', 'comentarios.favor_id= favor.id_favor');
        $this->db->join('usuarios','usuarios.id_usuario=comentarios.usuario_id');
        $this->db->join('respuestas','respuestas.id_comentario=comentarios.id_comentario');
        $this->db->where('id_favor',$id_favor);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }
    public function restarCredito($email)/*falta probar*/
    {
        $this->db->set('credito', 'credito-1', false);
        $this->db->where('email', $email);
        $this->db->update('usuarios');

    }
    public function buscarCategorias()/*falta probar*/
    {
        $query = $this->db->get('categorias');
        return ($query);
    }
    public function obtenerCategoria($nombre)
    {
        $this->db->where('nombre',$nombre);
        $query = $this->db->get('categorias');
        return ($query);
    }
    public function obtenerMisFavores($email)/*falta probar*/
    {

        $this->db->select('*');
        $this->db->from('favor');
        $this->db->join('usuarios', 'favor.id_usuario=usuarios.id_usuario');
        $this->db->where('email', $email);
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