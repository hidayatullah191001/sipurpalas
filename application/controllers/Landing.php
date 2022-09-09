<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$query = "SELECT buku.*, kategori.kategori FROM buku inner join kategori on buku.id_kategori = kategori.id ORDER BY buku.id DESC";
		$data['buku'] = $this->db->query($query)->result_array();

		$query2 = "SELECT * FROM profile ORDER BY id DESC LIMIT 1";
		$data['profile'] = $this->db->query($query2)->result_array();

		$this->load->view('landing/templates/header', $data);
		$this->load->view('landing/index');
		$this->load->view('landing/templates/footer');
	}

	public function profile(){
		$query = "SELECT * FROM profile ORDER BY id DESC LIMIT 1";
		$data['profile'] = $this->db->query($query)->result_array();

		$this->load->view('landing/templates/header', $data);
		$this->load->view('landing/profile');
		$this->load->view('landing/templates/footer');
	}


	public function koleksi(){
		$query = "SELECT buku.*, kategori.kategori FROM buku inner join kategori on buku.id_kategori = kategori.id ORDER BY buku.id DESC";
		$data['buku'] = $this->db->query($query)->result_array();
		$data['kategori'] = $this->db->get('kategori')->result_array();
		$recent = "SELECT * FROM buku ORDER by id DESC LIMIT 5";
		$data['recent'] = $this->db->query($recent)->result_array();

		$this->load->view('landing/templates/header', $data);
		$this->load->view('landing/koleksi');
		$this->load->view('landing/templates/aside');
		$this->load->view('landing/templates/footer');
	}

	public function kategori($id = null){
		$query = "SELECT buku.*, kategori.kategori FROM buku inner join kategori on buku.id_kategori = kategori.id WHERE kategori.id = $id ORDER BY buku.id DESC";
		$data['buku'] = $this->db->query($query)->result_array();
		$data['kategori'] = $this->db->get('kategori')->result_array();
		$recent = "SELECT * FROM buku ORDER by id DESC LIMIT 5";
		$data['recent'] = $this->db->query($recent)->result_array();

		$this->load->view('landing/templates/header', $data);
		$this->load->view('landing/kategori');
		$this->load->view('landing/templates/aside');
		$this->load->view('landing/templates/footer');
	}

	public function detail_buku($id){
		$query = "SELECT buku.*, kategori.kategori FROM buku inner join kategori on buku.id_kategori = kategori.id WHERE buku.id = $id ORDER BY buku.id DESC";
		$data['buku'] = $this->db->query($query)->row_array();
		$data['kategori'] = $this->db->get('kategori')->result_array();

		$recent = "SELECT * FROM buku ORDER by id DESC LIMIT 5";
		$data['recent'] = $this->db->query($recent)->result_array();

		$this->load->view('landing/templates/header', $data);
		$this->load->view('landing/detail_buku');
		$this->load->view('landing/templates/aside');	
		$this->load->view('landing/templates/footer');
	}

	public function referensi(){
		$data['kategori'] = $this->db->get('kategori')->result_array();
		$recent = "SELECT * FROM buku ORDER by id DESC LIMIT 5";
		$data['recent'] = $this->db->query($recent)->result_array();
		$query2 = "SELECT * FROM referensi ORDER BY id DESC";
		$data['referensi'] = $this->db->query($query2)->result_array();

		$this->load->view('landing/templates/header', $data);
		$this->load->view('landing/referensi');
		$this->load->view('landing/templates/aside');	
		$this->load->view('landing/templates/footer');
	}

	public function detail_referensi($id = null){
		$data['kategori'] = $this->db->get('kategori')->result_array();
		$recent = "SELECT * FROM buku ORDER by id DESC LIMIT 5";
		$data['recent'] = $this->db->query($recent)->result_array();
		$query2 = "SELECT * FROM referensi WHERE id = $id";
		$data['referensi'] = $this->db->query($query2)->row_array();

		$this->load->view('landing/templates/header', $data);
		$this->load->view('landing/detail_referensi');
		$this->load->view('landing/templates/aside');	
		$this->load->view('landing/templates/footer');
	}

	public function video_interaktif(){
		$data['kategori'] = $this->db->get('kategori')->result_array();
		$recent = "SELECT * FROM buku ORDER by id DESC LIMIT 5";
		$data['recent'] = $this->db->query($recent)->result_array();
		$query2 = "SELECT * FROM video ORDER BY id DESC";
		$data['video'] = $this->db->query($query2)->result_array();

		$this->load->view('landing/templates/header', $data);
		$this->load->view('landing/video_interaktif');
		$this->load->view('landing/templates/aside');	
		$this->load->view('landing/templates/footer');
	}

	public function detail_video($id=null){
		$data['kategori'] = $this->db->get('kategori')->result_array();
		$recent = "SELECT * FROM buku ORDER by id DESC LIMIT 5";
		$data['recent'] = $this->db->query($recent)->result_array();
		$query2 = "SELECT * FROM video WHERE id = $id";
		$data['video'] = $this->db->query($query2)->row_array();

		$this->load->view('landing/templates/header', $data);
		$this->load->view('landing/detail_video');
		$this->load->view('landing/templates/aside');	
		$this->load->view('landing/templates/footer');
	}
}	
