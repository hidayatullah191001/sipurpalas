<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		is_logged_id();
		$this->load->model('CRUD_model', 'crud');

	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Dashboard';


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('operator/index');
		$this->load->view('templates/footer');
	}

	public function profile(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Profile Web';
		$data['profile'] = $this->db->get('profile')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('operator/profile_web');
		$this->load->view('templates/footer');
	}

	public function tambah_profile(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Tambah Profile Web';

		$this->form_validation->set_rules('nama', 'Isi', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('operator/tambah');
			$this->load->view('templates/footer');
		}else{
			$data = [
				'nama' => $this->input->post('nama'),
				'foto' => $this->fungsiUploadFile('foto'),
				'sambutan'=> $this->input->post('sambutan'),
				'isi'=>$this->input->post('isi'),
			];
			$this->crud->insert('profile', $data);
			redirect('operator/profile');
		}
	}

	public function edit_profile($id = null){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Edit Profile Web';
		$data['profile'] = $this->db->get_where('profile', ['id' => $id])->row_array();

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');

		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('operator/edit');
			$this->load->view('templates/footer');
		}else{
			$post = $this->input->post();
			$this->id = $id;
			$this->nama = $post['nama'];
			if (!empty($_FILES['foto']['name'])) {
				$this->foto = $this->fungsiUploadFile	('foto');
				unlink(FCPATH . 'assets/data/kepsek/'. $post['oldfoto']);
			}else{
				$this->foto = $post['oldfoto'];
			}
			$this->sambutan = $post['sambutan'];
			$this->isi = $post['isi'];
			
			$this->db->update('profile', $this, array('id' => $id));
			$this->session->set_flashdata('message', '
				<div class="alert alert-success">
				Data profile berhasil diperbarui!
				</div>');
			redirect('operator/profile');
		}
	}

	public function hapus($id){
		$this->crud->delete('profile', 'id', $id);
		redirect('operator/profile');
	}

	public function fungsiUploadFile($namainputan){
		$config['upload_path']          = './assets/data/kepsek/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['max_size']             = 0;
		$this->load->library('upload', $config);
		$this->upload->do_upload($namainputan);
		return $this->upload->data("file_name");
	}

	public function quote(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Quote';


		$data['quote'] = $this->db->get('quote')->result_array();

		$this->form_validation->set_rules('by', 'Quote By', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');

		if ($this->form_validation->run()==false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('operator/quote');
			$this->load->view('templates/footer');
		}else{
			$data = [
				'quote_by'=>$this->input->post('by'),
				'isi'=>$this->input->post('isi'),
			];
			$this->crud->insert('quote', $data);
			redirect('operator/quote');
		}
	}

	public function edit_quote($id){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Edit Quote';

		$data['quote'] = $this->db->get_where('quote', ['id' => $id])->row_array();

		$this->form_validation->set_rules('by', 'Quote By', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');

		if ($this->form_validation->run()==false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('operator/edit_quote');
			$this->load->view('templates/footer');
		}else{
			$data = [
				'quote_by'=>$this->input->post('by'),
				'isi'=>$this->input->post('isi'),
			];
			$this->crud->update('quote', $data, 'id', $id);
			redirect('operator/quote');
		}
	}

	public function hapus_quote($id=null){
		$this->crud->delete('quote', 'id', $id);
		redirect('operator/quote');
	}
}