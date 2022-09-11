<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Koleksi_model', 'koleksi');
		$this->load->model('Referensi_model', 'referensi');
		$this->load->model('Video_model', 'video');
	}

	public function index(){
		$query = "SELECT buku.*, kategori.kategori FROM buku inner join kategori on buku.id_kategori = kategori.id ORDER BY buku.id DESC LIMIT 6";
		$data['buku'] = $this->db->query($query)->result_array();
		$data['count_buku'] = $this->db->get('buku')->num_rows();


		$query2 = "SELECT * FROM referensi ORDER BY id DESC LIMIT 3";
		$data['referensi'] = $this->db->query($query2)->result_array();
		$data['count_referensi'] = $this->db->get('referensi')->num_rows();

		$query3 = "SELECT * FROM video ORDER BY id DESC LIMIT 6";
		$data['video'] = $this->db->query($query3)->result_array();

		$query4 = "SELECT * FROM quote ORDER BY id DESC LIMIT 1";
		$data['quote'] = $this->db->query($query4)->result_array();

		$data['count_video'] = $this->db->get('video')->num_rows();

		$data['title'] = "Home";

		$this->load->view('landing/templates/header', $data);
		$this->load->view('landing/index');
		$this->load->view('landing/templates/footer');
	}

	public function profile(){
		$query = "SELECT * FROM profile ORDER BY id DESC LIMIT 1";
		$data['profile'] = $this->db->query($query)->result_array();
		$data['title'] = "Profile";

		$this->load->view('landing/templates/header', $data);
		$this->load->view('landing/profile');
		$this->load->view('landing/templates/footer');
	}


	public function koleksi(){
		$data['kategori'] = $this->db->get('kategori')->result_array();
		$recent = "SELECT * FROM buku ORDER by id DESC LIMIT 5";
		$data['recent'] = $this->db->query($recent)->result_array();
		$data['title'] = "Koleksi";

		//config
		$config['base_url'] = base_url()."landing/koleksi/"; 
		$config['total_rows'] = $this->koleksi->getCount();
		$config['per_page'] = 5;
		$config['num_links'] = 5;

		$config['attributes'] = array('class' =>'page-link');

		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['buku'] = $this->koleksi->getAllKoleksi($config['per_page'],$data['start']);

		if($this->input->post('key')){
			$data['buku'] = $this->koleksi->getSearch();
		}

		$this->load->view('landing/templates/header', $data);
		$this->load->view('landing/koleksi');
		$this->load->view('landing/templates/aside', $data);
		$this->load->view('landing/templates/footer');
	}

	public function kategori($id = null){
		$query = "SELECT buku.*, kategori.kategori FROM buku inner join kategori on buku.id_kategori = kategori.id WHERE kategori.id = $id ORDER BY buku.id DESC";
		$data['buku'] = $this->db->query($query)->result_array();
		$data['kategori'] = $this->db->get('kategori')->result_array();
		$recent = "SELECT * FROM buku ORDER by id DESC LIMIT 5";
		$data['recent'] = $this->db->query($recent)->result_array();
		$data['data_kategori'] = $this->db->get_where('kategori', ['id'=> $id])->row_array();
		$data['title'] = "Kategori ";

		$this->load->view('landing/templates/header', $data);
		$this->load->view('landing/kategori');
		$this->load->view('landing/templates/aside');	
		$this->load->view('landing/templates/footer');

	}
	public function detail_buku($id){
		$data['title'] = "Detail Buku";

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
		$data['title'] = "Referensi";
		$data['kategori'] = $this->db->get('kategori')->result_array();
		$recent = "SELECT * FROM buku ORDER by id DESC LIMIT 5";
		$data['recent'] = $this->db->query($recent)->result_array();

		//config
		$config['base_url'] = base_url()."landing/referensi/"; 
		$config['total_rows'] = $this->referensi->getCount();
		$config['per_page'] = 5;
		$config['num_links'] = 5;

		$config['attributes'] = array('class' =>'page-link');

		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['referensi'] = $this->referensi->getAllReferensi($config['per_page'],$data['start']);

		if($this->input->post('key')){
			$data['referensi'] = $this->referensi->getSearch();
		}

		$this->load->view('landing/templates/header', $data);
		$this->load->view('landing/referensi');	
		$this->load->view('landing/templates/footer');
	}

	public function detail_referensi($id = null){
		$data['title'] = "Detail Referensi";
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
		$data['title'] = "Video Interaktif";

		//config
		$config['base_url'] = base_url()."landing/video_interaktif/"; 
		$config['total_rows'] = $this->video->getCount();
		$config['per_page'] = 5;
		$config['num_links'] = 5;

		$config['attributes'] = array('class' =>'page-link');

		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['video'] = $this->video->getAllVideo($config['per_page'],$data['start']);

		if($this->input->post('key')){
			$data['video'] = $this->video->getSearch();
		}

		$this->load->view('landing/templates/header', $data);
		$this->load->view('landing/video_interaktif');	
		$this->load->view('landing/templates/footer');
	}

	public function detail_video($id=null){
		$data['kategori'] = $this->db->get('kategori')->result_array();
		$recent = "SELECT * FROM buku ORDER by id DESC LIMIT 5";
		$data['recent'] = $this->db->query($recent)->result_array();
		$query2 = "SELECT * FROM video WHERE id = $id";
		$data['video'] = $this->db->query($query2)->row_array();
		$data['title'] = "Detail Video Interaktif";

		$this->load->view('landing/templates/header', $data);
		$this->load->view('landing/detail_video');
		$this->load->view('landing/templates/aside');	
		$this->load->view('landing/templates/footer');
	}
}	
