<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kontak');
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Website TRKJ',
			'title'	=> 'Data Kontak',
			'kontak'  => $this->m_kontak->lists(),
			'isi'	=> 'admin/v_kontak'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$data = array(
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'kontak_person' => $this->input->post('kontak_person'),
			'facebook' => $this->input->post('facebook'),
			'instagram' => $this->input->post('instagram'),
			'youtube' => $this->input->post('youtube'),
			'tiktok' => $this->input->post('tiktok'),
			'github' => $this->input->post('github'),
			'discord' => $this->input->post('discord'),
		);
	

		$this->m_kontak->add($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!!');
		redirect('kontak');

		$data = array(
			'title'	=> 'Website TRKJ',
			'title'	=> 'Data Kontak',
			'kontak'  => $this->m_kontak->lists(),
			'isi'	=> 'admin/v_kontak'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function edit($id_kontak)
	{
		$data = array(
			'id_kontak'   => $id_kontak,
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'kontak_person' => $this->input->post('kontak_person'),
			'facebook' => $this->input->post('facebook'),
			'instagram' => $this->input->post('instagram'),
			'youtube' => $this->input->post('youtube'),
			'tiktok' => $this->input->post('tiktok'),
			'github' => $this->input->post('github'),
			'discord' => $this->input->post('discord'),
		);
		$this->m_kontak->edit($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
		redirect('kontak');

		$data = array(
			'title'	=> 'Website TRKJ',
			'title'	=> 'Data Kontak',
			'kontak'  => $this->m_kontak->lists(),
			'isi'	=> 'admin/v_kontak'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function delete($id_kontak)
	{
		$data = array(
			'id_kontak'   => $id_kontak,
		);
		$this->m_kontak->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!!');
		redirect('kontak');
	}
}

/* End of file kontak.php */
