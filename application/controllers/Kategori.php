<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_id();
		$this->load->model('CRUD_model', 'crud');
	}

	public function tambah()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Tambah Kategori';

		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('kategori/index');
			$this->load->view('templates/footer');
		} else {
			$data = [
				'kategori' => $this->input->post('kategori'),
				'date_created' => time(),
			];
			$this->crud->insert('kategori', $data);
			redirect('kategori/lihat');
		}
	}

	public function lihat(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Lihat Kategori';
		$data['kategori'] = $this->db->get('kategori')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('kategori/lihat');
		$this->load->view('templates/footer');
	}

	public function edit($id=null){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Edit Kategori';
		$data['kategori'] = $this->db->get_where('kategori', ['id'=>$id])->row_array();

		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('kategori/edit');
			$this->load->view('templates/footer');
		} else {
			$data = [
				'kategori' => $this->input->post('kategori'),
				'date_created' => time(),
			];
			$this->crud->update('kategori', $data, 'id', $id);
			redirect('kategori/lihat');
		}
	}

	public function hapus($id){
		$this->crud->delete('kategori', 'id', $id);
		redirect('kategori/lihat');
	}
}