<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video_model extends CI_Model
{
  public function getCount()
  {
    return $this->db->get('video')->num_rows();
  }

  public function getAllVideo($limit, $start = 0) {
    $this->db->order_by('id', 'desc');
    return $this->db->get('video', $limit, $start)->result_array();
  }

  public function getSearch(){
    $keyword = $this->input->post('key', true);

    $query = "SELECT * FROM video WHERE judul LIKE '%$keyword%' ORDER BY id DESC";
    return $this->db->query($query)->result_array();
  }
}
