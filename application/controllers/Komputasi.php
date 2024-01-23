<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Komputasi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_komputasi');
	}

	public function index()
	{
		$data = array(
			'title' 	=> 'Website TRKJ',
			'title2' 	=> 'Data File Komputasi',
			'komputasi'  => $this->m_komputasi->lists(),
			'isi' 		=> 'admin/komputasi/v_lists',
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
					'title2'  => 'Komputasi',
					'komputasi' => $this->m_komputasi->lists(),
					'isi'     => 'admin/komputasi/v_add',
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
				$this->m_komputasi->add($data);
				$this->session->set_flashdata('pesan', 'Komputasi Berhasil Di Posting !!');
				redirect('komputasi');
			}
		}
		$data = array(
			'title'  => 'Website TRKJ',
			'title2' => 'Komputasi',
			'isi'	 => 'admin/komputasi/v_add',
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function edit($id_komputasi)
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
					'title2' => 'Edit Komputasi',
					'error' => $this->upload->display_errors(),
					'komputasi' => $this->m_komputasi->detail($id_komputasi),
					'isi'	 => 'admin/komputasi/v_edit'
				);
				$this->load->view('admin/layout/v_wrapper', $data, FALSE);
			} else {
				$upload_data 			 = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image']	 = './foto_lab/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				//menghapus file foto lama
				$komputasi = $this->m_komputasi->detail($id_komputasi);
				if ($komputasi->foto_lab != "") {
					unlink('./foto_lab/' . $komputasi->foto_lab);
				}
				//end menghapus foto
				$data = array(
					'id_komputasi'		=> $id_komputasi,
					'kata_pengantar' 		=> $this->input->post('kata_pengantar'),
					'foto_lab'		=> $upload_data['uploads']['file_name']
				);
				$this->m_komputasi->edit($data);
				$this->session->set_flashdata('pesan', 'Komputasi Berhasil Di Reposting !!');
				redirect('komputasi');
			}
			//end menghapus foto
			$data = array(
				'id_komputasi'		=> $id_komputasi,
				'kata_pengantar' 		=> $this->input->post('kata_pengantar'),
			);
			$this->m_komputasi->edit($data);
			$this->session->set_flashdata('pesan', 'Komputasi Berhasil Di Reposting !!');
			redirect('komputasi');
		}
		$data = array(
			'title'  => 'Website TRKJ',
			'title2' => 'Add Komputasi',
			'komputasi' => $this->m_komputasi->detail($id_komputasi),
			'isi'	 => 'admin/komputasi/v_edit'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function delete($id_komputasi)
	{
		//menghapus file foto lama
		$komputasi = $this->m_komputasi->detail($id_komputasi);
		if ($komputasi->foto_lab != "") {
			unlink('./foto_lab/' . $komputasi->foto_lab);
		}
		//end menghapus foto

		$data = array('id_komputasi' => $id_komputasi);
		$this->m_komputasi->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus !!!');
		redirect('komputasi');
	}
}

/* End of file Komputasi.php */
