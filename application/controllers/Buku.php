<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_id();
		$this->load->model('CRUD_model', 'crud');
	}

	public function tambah()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Tambah Buku';
		$data['kategori'] = $this->db->get('kategori')->result_array();

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('penulis', 'Penulis', 'required');
		$this->form_validation->set_rules('id_kategori', 'Kategori', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('buku/index');
			$this->load->view('templates/footer');
		} else {
			$data = [
				'judul' => $this->input->post('judul'),
				'penulis' => $this->input->post('penulis'),
				'catatan' => $this->input->post('catatan'),
				'thumbnail' => $this->fungsiUploadFile('thumbnail'),
				'id_kategori' => $this->input->post('id_kategori'),
				'link' => $this->input->post('link'),
				'file' => $this->fungsiUploadFile('buku'),
				'date_created' => time(),
			];
			$this->crud->insert('buku', $data);
			redirect('buku/list');
		}
	}

	public function list(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Lihat Buku';
		$query = "SELECT buku.*, kategori.kategori FROM buku inner join kategori on buku.id_kategori = kategori.id";
		$data['buku'] = $this->db->query($query)->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('buku/list');
		$this->load->view('templates/footer');
	}

	public function lihat($id =null){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Edit Buku';
		$query = "SELECT buku.*, kategori.kategori FROM buku inner join kategori on buku.id_kategori = kategori.id WHERE buku.id = $id LIMIT 8";
		$data['buku'] = $this->db->query($query)->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('buku/lihat');
		$this->load->view('templates/footer');

	}

	public function edit($id=null){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Edit Buku';
		$data['buku'] = $this->db->get_where('buku', ['id'=>$id])->row_array();
		$data['kategori'] = $this->db->get('kategori')->result_array();


		$oldfile = $this->input->post('oldfile');
		$oldthumbnail = $this->input->post('oldthumbnail');

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('penulis', 'Penulis', 'required');
		$this->form_validation->set_rules('id_kategori', 'Kategori', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('buku/edit');
			$this->load->view('templates/footer');
		} else {
			$post = $this->input->post();
			$this->id = $id;
			$this->judul = $post['judul'];
			$this->penulis = $post['penulis'];
			$this->catatan = $post['catatan'];
			if (!empty($_FILES['thumbnail']['name'])) {
				$this->thumbnail = $this->fungsiUploadThumbnail('thumbnail');
				unlink(FCPATH . 'assets/data/thumbnail/'. $oldthumbnail);
			}else{
				$this->thumbnail = $oldthumbnail;
			}
			$this->id_kategori = $post['id_kategori'];
			$this->link = $post['link'];
			if (!empty($_FILES['file']['name'])) {
				$this->file = $this->fungsiUploadFile('file');
				unlink(FCPATH . 'assets/data/buku/'. $oldfile);
			}else{
				$this->file = $oldfile;
			}
			$this->db->update('buku', $this, array('id' => $id));
			$this->session->set_flashdata('message', '
				<div class="alert alert-success">
				Data berhasil diperbarui!
				</div>');
			redirect('buku/list');
		}
	}

	public function hapus($id){
		$_id = $this->db->get_where('buku', ['id' => $id])->row_array();
		$query = $this->db->delete('buku', ['id' =>$id]);
		if ($query) {
			unlink(FCPATH . 'assets/data/buku/'. $_id['file']);
			unlink(FCPATH . 'assets/data/thumbnail/'. $_id['thumbnail']);
		}
		$this->session->set_flashdata('message', '
			<div class="alert alert-success">
			Data berhasil dihapus!
			</div>');
		redirect('buku/list');
	}

	public function fungsiUploadFile($namainputan){
		$config['upload_path']          = './assets/data/upload/';
		$config['allowed_types']        = 'jpg|jpeg|png|doc|docx|ppt|pptx|xls|xlsx|pdf';
		$config['max_size']             = 0;
		$this->load->library('upload', $config);
		$this->upload->do_upload($namainputan);
		return $this->upload->data("file_name");
	}
	
	// public function fungsiUploadFile($namainputan){
	// 	$config['upload_path']          = './assets/data/buku/';
	// 	$config['allowed_types']        = 'jpg|jpeg|png|doc|docx|ppt|pptx|xls|xlsx|rar|zip|pdf';
	// 	$config['max_size']             = 0;
	// 	$this->load->library('upload', $config);
	// 	$this->upload->do_upload($namainputan);
	// 	return $this->upload->data("file_name");
	// }

	function tinymce_upload() {
		$config['upload_path'] = './assets/data/tinymce/';
		$config['allowed_types'] = 'jpg|jpeg|png|doc|docx|ppt|pptx|xls|xlsx|rar|zip|pdf';
		$config['max_size'] = 0;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('file')) {
			$this->output->set_header('HTTP/1.0 500 Server Error');
			exit;
		} else {
			$file = $this->upload->data();
			$this->output
			->set_content_type('application/json', 'utf-8')
			->set_output(json_encode(['location' => base_url().'assets/data/tinymce/'.$file['file_name']]))
			->_display();
			exit;
		}
	}

}