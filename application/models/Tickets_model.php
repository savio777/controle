<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Tickets_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function pegar()
    {
        $query = $this->db->get('agenda');
        return $query->result();
    }

    public function pegarId($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('agenda');
        return $query->result();
    }

    public function inserir($data)
    {
        $this->db->insert('agenda', $data);
    }

    public function editar($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('agenda', $data);
    }

    public function remover($id)
    {
        $this->db->where('id', $id);
        $this->db->update('agenda');
    }

}
