<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_mk');
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Website TRKJ',
			'title'	=> 'Data Mata Kuliah',
			'mk'  => $this->m_mk->lists(),
			'isi'	=> 'admin/v_mk'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$data = array(
			'nama_mk' => $this->input->post('nama_mk'),
			'kode_mk' => $this->input->post('kode_mk'),
			'sks' => $this->input->post('sks'),
			'semester' => $this->input->post('semester')
		);
		$this->m_mk->add($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!!');
		redirect('mk');
	}

	public function edit($id_mk)
	{
		$data = array(
			'id_mk'   => $id_mk,
			'nama_mk' => $this->input->post('nama_mk'),
			'kode_mk' => $this->input->post('kode_mk'),
			'sks' => $this->input->post('sks'),
			'semester' => $this->input->post('semester')
		);
		$this->m_mk->edit($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
		redirect('mk');
	}

	public function delete($id_mk)
	{
		$data = array(
			'id_mk'   => $id_mk,
		);
		$this->m_mk->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!!');
		redirect('mk');
	}
}

/* End of file Mk.php */
