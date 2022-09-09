<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CRUD_model extends CI_Model
{
    public function insert($table, $data){
        $this->db->insert($table, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                Data berhasil ditambah!
                </div>');
        return;
    }

    public function update($table, $data, $key_id, $id){
        $this->db->where($key_id, $id);
        $this->db->update($table, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                Data berhasil diperbarui!
                </div>');
        return;
    }

    public function delete($table, $key_id, $id){
        $this->db->delete($table, [$key_id => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success">
                Data berhasil dihapus!
                </div>');
        return;
    }
}
