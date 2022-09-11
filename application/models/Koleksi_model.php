<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Koleksi_model extends CI_Model
{
    public function getCount()
  {
    return $this->db->get('buku')->num_rows();
  }

  public function getAllKoleksi($limit, $start = 0) {
    $this->db->select('buku.*, kategori.kategori');
    $this->db->join('kategori', 'buku.id_kategori = kategori.id');
    $this->db->order_by('buku.id', 'desc');
    return $this->db->get('buku', $limit, $start)->result_array();
  }

  public function getSearch(){
    $keyword = $this->input->post('key', true);

    $query = "SELECT buku.*, kategori.kategori FROM buku inner join kategori on buku.id_kategori = kategori.id WHERE buku.judul LIKE '%$keyword%' ORDER BY buku.id DESC";
    return $this->db->query($query)->result_array();
  }
}
