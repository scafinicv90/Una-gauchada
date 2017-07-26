<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ComprasModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }
    public function crearCompra($compra)
    {
        $this->db->insert('compra_creditos', $compra);
    }

    public function obtenerGananciasEntre2Fechas($fechaDesde,$fechaHasta)
    {
        $this->db->from('compra_creditos');
        $this->db->join('usuarios','usuarios.id_usuario= compra_creditos.usuarios_id_usuario');
        $this->db->where('compra_creditos.fecha <=',$fechaHasta);
        $this->db->where('compra_creditos.fecha >=',$fechaDesde);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return ($query);
        } else {
            return (false);
        }
    }

     public function sumarCreditos($email,$creditos)
    {

        $this->db->set('credito',$creditos, false);
        $this->db->where('email', $email);
        $this->db->update('usuarios');

    }
}