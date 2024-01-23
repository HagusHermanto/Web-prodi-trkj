<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pres_dosen extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pres_dosen');
	}


	public function index()
	{
		$data = array(
			'title'		=> 'Website TRKJ',
			'title2'	=> 'Prestasi Dosen',
			'pres_dosen'  => $this->m_pres_dosen->lists(),
			'isi'		=> 'admin/pres_dosen/v_lists',
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->form_validation->set_rules('nama', 'Nama Kelompok', 'required');
		$this->form_validation->set_rules('juara', 'Juara - Lomba', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' 	 => 'Website TRKJ',
				'title2'	 => 'Add Prestasi Dosen',
				'pres_dosen' => $this->m_pres_dosen->lists(),
				'isi'		 => 'admin/pres_dosen/v_add',
			);
			$this->load->view('admin/layout/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'nama'	=> $this->input->post('nama'),
				'juara'	=> $this->input->post('juara'),
			);
			$this->m_pres_dosen->add($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahakan !!');
			redirect('pres_dosen');
		}
	}

	public function edit($id_prestasi)
	{
		$this->form_validation->set_rules('nama', 'Nama Kelompok', 'required');
		$this->form_validation->set_rules('juara', 'Juara - Lomba', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' 	 => 'Website TRKJ',
				'title2'	 => 'Edit Prestasi Dosen',
				'pres_dosen' 	 => $this->m_pres_dosen->detail($id_prestasi),
				'isi'		 => 'admin/pres_dosen/v_edit',
			);
			$this->load->view('admin/layout/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_prestasi'		=> $id_prestasi,
				'nama'				=> $this->input->post('nama'),
				'juara'				=> $this->input->post('juara'),
			);
			$this->m_pres_dosen->edit($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
			redirect('pres_dosen');
		}
	}

	public function delete($id_prestasi)
	{
		$data = array(
			'id_prestasi'	=> $id_prestasi,
		);
		$this->m_pres_dosen->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!');
		redirect('pres_dosen');
	}
}

/* End of file Pres_dosen.php */
