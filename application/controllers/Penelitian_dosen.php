<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penelitian_dosen extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_penelitian_dosen');
	}


	public function index()
	{
		$data = array(
			'title'  			=> 'Website TRKJ',
			'title2' 			=> 'Penelitian Dosen',
			'penelitian_dosen'  => $this->m_penelitian_dosen->lists(),
			'isi'    			=> 'admin/penelitian_dosen/v_lists'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->form_validation->set_rules('nama', 'Nama Dosen', 'required');
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('abstrak', 'Abstrak', 'required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' 	 		=> 'Website TRKJ',
				'title2'	 		=> 'Add Penelitian Dosen',
				'penelitian_dosen'  => $this->m_penelitian_dosen->lists(),
				'isi'		        => 'admin/penelitian_dosen/v_add',
			);
			$this->load->view('admin/layout/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'nama'			=> $this->input->post('nama'),
				'judul'			=> $this->input->post('judul'),
				'abstrak'		=> $this->input->post('abstrak'),
				'tahun'			=> $this->input->post('tahun'),
			);
			$this->m_penelitian_dosen->add($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahakan !!');
			redirect('penelitian_dosen');
		}
	}

	public function edit($id_penelitian)
	{
		$this->form_validation->set_rules('nama', 'Nama Dosen', 'required');
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('abstrak', 'Abstrak', 'required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' 				=> 'Website TRKJ',
				'title2'				=> 'Edit Penelitian Dosen',
				'penelitian_dosen' 		=> $this->m_penelitian_dosen->detail($id_penelitian),
				'isi'					=> 'admin/penelitian_dosen/v_edit',
			);
			$this->load->view('admin/layout/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_penelitian'		=> $id_penelitian,
				'nama'		=> $this->input->post('nama'),
				'judul'		=> $this->input->post('judul'),
				'abstrak'	=> $this->input->post('abstrak'),
				'tahun'		=> $this->input->post('tahun'),
			);
			$this->m_penelitian_dosen->edit($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
			redirect('penelitian_dosen');
		}
	}

	public function delete($id_penelitian)
	{
		$data = array(
			'id_penelitian'	=> $id_penelitian,
		);
		$this->m_penelitian_dosen->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!');
		redirect('penelitian_dosen');
	}
}

/* End of file Penelitian_dosen.php */
