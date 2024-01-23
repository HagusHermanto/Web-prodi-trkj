<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Visi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_visi');
	}

	public function index()
	{
		$data = array(
			'title' 	 => 'Website TRKJ',
			'title2'	 => 'Visi',
			'visi' 		 => $this->m_visi->lists(),
			'isi'		 => 'admin/visi/v_lists',
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->form_validation->set_rules('judul', 'Judul Visi Misi', 'required');
		$this->form_validation->set_rules('isi', 'Isi Visi Misi', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' 	 => 'Website TRKJ',
				'title2'	 => 'Add Visi',
				'visi' => $this->m_visi->lists(),
				'isi'		 => 'admin/visi/v_add',
			);
			$this->load->view('admin/layout/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'judul'		=> $this->input->post('judul'),
				'isi'		=> $this->input->post('isi'),
			);
			$this->m_visi->add($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahakan !!');
			redirect('visi');
		}
	}

	public function edit($id_visi)
	{
		$this->form_validation->set_rules('judul', 'Judul Visi Misi', 'required');
		$this->form_validation->set_rules('isi', 'Isi Visi Misi', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' 	 => 'Website TRKJ',
				'title2'	 => 'Edit Visi',
				'visi'		 => $this->m_visi->detail($id_visi),
				'isi'		 => 'admin/visi/v_edit',
			);
			$this->load->view('admin/layout/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_visi'	=> $id_visi,
				'judul'		=> $this->input->post('judul'),
				'isi'		=> $this->input->post('isi'),
			);
			$this->m_visi->edit($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
			redirect('visi');
		}
	}

	public function delete($id_visi)
	{
		$data = array(
			'id_visi'	=> $id_visi,
		);
		$this->m_visi->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!');
		redirect('visi');
	}
}

/* End of file Visi.php */
