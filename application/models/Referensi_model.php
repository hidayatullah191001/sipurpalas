<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Referensi_model extends CI_Model
{
  public function getCount()
  {
    return $this->db->get('referensi')->num_rows();
  }

  public function getAllReferensi($limit, $start = 0) {
    $this->db->order_by('id', 'desc');
    return $this->db->get('referensi', $limit, $start)->result_array();
  }

  public function getSearch(){
    $keyword = $this->input->post('key', true);

    $query = "SELECT * FROM referensi WHERE nama LIKE '%$keyword%' ORDER BY id DESC";
    return $this->db->query($query)->result_array();
  }
}
