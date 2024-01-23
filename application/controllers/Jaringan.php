<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jaringan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_jaringan');
	}

	public function index()
	{
		$data = array(
			'title' 	=> 'Website TRKJ',
			'title2' 	=> 'Data File Jaringan',
			'jaringan'  => $this->m_jaringan->lists(),
			'isi' 		=> 'admin/jaringan/v_lists',
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->form_validation->set_rules('kata_pengantar', 'Kata Pengantar', 'required', 'required', array('required' => '%s Harus Diisi'));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './foto_lab/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2000;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto_lab')) {
				$data = array(
					'title'   => 'Website TRKJ',
					'title2'  => 'Jaringan',
					'jaringan' => $this->m_jaringan->lists(),
					'isi'     => 'admin/jaringan/v_add',
				);
				$this->load->view('admin/layout/v_wrapper', $data, FALSE);
			} else {
				$upload_data 			 = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image']	 = './foto_lab/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);

				$data = array(
					'kata_pengantar' 	=> $this->input->post('kata_pengantar'),
					'foto_lab'	=> $upload_data['uploads']['file_name']
				);
				$this->m_jaringan->add($data);
				$this->session->set_flashdata('pesan', 'Jaringan Berhasil Di Posting !!');
				redirect('jaringan');
			}
		}
		$data = array(
			'title'  => 'Website TRKJ',
			'title2' => 'Jaringan',
			'isi'	 => 'admin/jaringan/v_add',
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function edit($id_jaringan)
	{
		$this->form_validation->set_rules('kata_pengantar', 'Kata Pengantar', 'required', 'required', array('required' => '%s Harus Diisi'));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './foto_lab/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2000;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto_lab')) {

				$data = array(
					'title'  => 'Website TRKJ',
					'title2' => 'Edit Jaringan',
					'error' => $this->upload->display_errors(),
					'jaringan' => $this->m_jaringan->detail($id_jaringan),
					'isi'	 => 'admin/jaringan/v_edit'
				);
				$this->load->view('admin/layout/v_wrapper', $data, FALSE);
			} else {
				$upload_data 			 = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image']	 = './foto_lab/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				//menghapus file foto lama
				$jaringan = $this->m_jaringan->detail($id_jaringan);
				if ($jaringan->foto_lab != "") {
					unlink('./foto_lab/' . $jaringan->foto_lab);
				}
				//end menghapus foto
				$data = array(
					'id_jaringan'		=> $id_jaringan,
					'kata_pengantar' 		=> $this->input->post('kata_pengantar'),
					'foto_lab'		=> $upload_data['uploads']['file_name']
				);
				$this->m_jaringan->edit($data);
				$this->session->set_flashdata('pesan', 'Jaringan Berhasil Di Reposting !!');
				redirect('jaringan');
			}
			//end menghapus foto
			$data = array(
				'id_jaringan'		=> $id_jaringan,
				'kata_pengantar' 		=> $this->input->post('kata_pengantar'),
			);
			$this->m_jaringan->edit($data);
			$this->session->set_flashdata('pesan', 'Jaringan Berhasil Di Reposting !!');
			redirect('jaringan');
		}
		$data = array(
			'title'  => 'Website TRKJ',
			'title2' => 'Add Jaringan',
			'jaringan' => $this->m_jaringan->detail($id_jaringan),
			'isi'	 => 'admin/jaringan/v_edit'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function delete($id_jaringan)
	{
		//menghapus file foto lama
		$jaringan = $this->m_jaringan->detail($id_jaringan);
		if ($jaringan->foto_lab != "") {
			unlink('./foto_lab/' . $jaringan->foto_lab);
		}
		//end menghapus foto

		$data = array('id_jaringan' => $id_jaringan);
		$this->m_jaringan->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus !!!');
		redirect('jaringan');
	}
}

/* End of file Jaringan.php */
