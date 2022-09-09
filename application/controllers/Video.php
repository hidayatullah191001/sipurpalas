<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_id();
		$this->load->model('CRUD_model', 'crud');
	}

	public function tambah()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Tambah Video Interaktif';

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('link', 'Id Video Interaktif', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('video/index');
			$this->load->view('templates/footer');
		} else {
			$data = [
				'judul' => $this->input->post('judul'),
				'catatan' => $this->input->post('catatan'),
				'link' => $this->input->post('link'),
				'date_created' => time(),
			];
			$this->crud->insert('video', $data);
			redirect('video/lihat');
		}
	}

	public function lihat(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Lihat Video Interaktif';
		$data['video'] = $this->db->get('video')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('video/lihat');
		$this->load->view('templates/footer');
	}

	public function edit($id=null){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Edit Video Interaktif';
		$data['video'] = $this->db->get_where('video', ['id'=>$id])->row_array();

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('link', 'Id Video Interaktif', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('video/edit');
			$this->load->view('templates/footer');
		} else {
			$data = [
				'judul' => $this->input->post('judul'),
				'catatan' => $this->input->post('catatan'),
				'link' => $this->input->post('link'),
			];
			
			$this->crud->update('video', $data, 'id', $id);
			redirect('video/lihat');
		}
	}

	public function hapus($id){
		$this->crud->delete('video', 'id', $id);
		redirect('video/lihat');
	}

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