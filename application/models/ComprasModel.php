<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ComprasModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

     public function sumarCreditos($email,$creditos)
    {

        $this->db->set('credito',$creditos, false);
        $this->db->where('email', $email);
        $this->db->update('usuario');

    }
}