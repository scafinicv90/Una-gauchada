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
        $query = $this->db->insert_id();
        return $query;

    }
    public function agregarImagen($img, $id_usuario, $id_favor)
    {
        $insert = array("img" => $img,
            "id_usuario"          => $id_usuario,
            "id_favor"            => $id_favor);

        $this->db->insert("imagenes", $insert);
    }
    public function agregarComentario($query)
    {
        $this->db->insert('comentario',$query);
    }
    public function agregarRespuesta($query)
    {
        $this->db->insert('respuesta',$query);
    }
    public function updateComentario($id_comentario)
    {
        $query = $this->db->insert_id();
        // $this->db->where('id_comentario',$id_comentario);
        // $this->db->set('id_respuesta', $query);
        // $this->db->insert('comentario');
        $update = array("id_respuesta" => $query);
        $this->db->where('id_comentario',$id_comentario);
        $this->db->update("comentario",$update);
    }
    public function agregarRelacionComentarioFavor($favor_id)
    {
        $query =array('favor_id' => $favor_id,
                        'comentario_id'=>$this->db->insert_id() );
        $this->db->insert('favor_comentario',$query);

    }
    public function agregarFC($categoria)

    public function agregarFC($categoria, $id_favor)
    {
        foreach ($categoria as $cat) {
            $this->db->set('id_favor', $id_favor);
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
        $this->db->where('TABLE_SCHEMA', 'gauchada');
        $this->db->where('TABLE_NAME', 'favor');
        $query = $this->db->get();
        return ($query);

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
        $this->db->join('usuario', 'usuario.id_usuario=favor.id_usuario');
        $this->db->join('imagenes', 'imagenes.id_favor=favor.id','left');
        // SELECT * FROM favor JOIN usuario ON usuario.id_usuario = favor.id_usuario LEFT JOIN imagenes ON imagenes.id_favor=favor.id WHERE id=34

// =======
//         $this->db->join('imagenes', 'imagenes.id_favor=favor.id', 'left');
// >>>>>>> 95dd9cedcd683d2f3b147ff0e22ca19416fceb57
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
        return ($query);
    }

    public function obtenerComentarios($id_favor)
    {
        $this->db->select('comentario.descripcion, comentario.id_respuesta , comentario.id_comentario,usuario.nombre');
        $this->db->from('favor');
        $this->db->join('favor_comentario', 'favor.id = favor_comentario.favor_id', 'right');
        $this->db->join('comentario', 'comentario.id_comentario = favor_comentario.comentario_id', 'right');
        $this->db->join('usuario', 'usuario.id_usuario=comentario.id_usuario');
        $this->db->where('id', $id_favor);
        $query = $this->db->get();
        // var_dump($query->result());die();
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }
    public function obtenerRespuestas($id_favor)
    {
        $this->db->select('respuesta.respuesta,respuesta.id_usuario,respuesta.id_comentario');
        $this->db->from('favor');
        $this->db->join('favor_comentario', 'favor.id = favor_comentario.favor_id' ,'right');
        $this->db->join('comentario', 'comentario.id_comentario = favor_comentario.comentario_id' ,'right');
        $this->db->join('usuario','usuario.id_usuario=comentario.id_usuario');
        $this->db->join('respuesta','respuesta.id_respuesta= comentario.id_respuesta');
        $this->db->where('id',$id_favor);
        $query = $this->db->get();
        // var_dump($query->result());die();
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
        $this->db->join('usuario', 'favor.id_usuario=usuario.id_usuario');
        $this->db->join('imagenes', 'imagenes.id_favor=favor.id', 'left');
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
    public function buscarMisFavores($email)
    {

        $this->db->select('*');
        $this->db->from('favor');
        $this->db->join('usuario', 'favor.id_usuario=usuario.id_usuario');
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
