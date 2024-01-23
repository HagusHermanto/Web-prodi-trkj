<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Akreditasi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_akreditasi');
	}

	public function index()
	{
		$data = array(
			'title' 	=> 'Website TRKJ',
			'title2' 	=> 'Data File Akreditasi',
			'akreditasi'  => $this->m_akreditasi->lists(),
			'isi' 		=> 'admin/akreditasi/v_lists',
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->form_validation->set_rules('isi', 'Isi', 'required', 'required', array('required' => '%s Harus Diisi'));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './foto_akreditasi/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2000;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto_akreditasi')) {
				$data = array(
					'title'   => 'Website TRKJ',
					'title2'  => 'Add Data Akreditasi',
					'akreditasi' => $this->m_akreditasi->lists(),
					'isi'     => 'admin/akreditasi/v_add',
				);
				$this->load->view('admin/layout/v_wrapper', $data, FALSE);
			} else {
				$upload_data 			 = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image']	 = './foto_akreditasi/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);

				$data = array(
					'isi' 	=> $this->input->post('isi'),
					'foto_akreditasi'	=> $upload_data['uploads']['file_name']
				);
				$this->m_akreditasi->add($data);
				$this->session->set_flashdata('pesan', 'Akreditasi Berhasil Di Posting !!');
				redirect('akreditasi');
			}
		}
		$data = array(
			'title'  => 'Website TRKJ',
			'title2' => 'Add Data Akreditasi',
			'isi'	 => 'admin/akreditasi/v_add',
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function edit($id_akreditasi)
	{
		$this->form_validation->set_rules('isi', 'Isi', 'required', 'required', array('required' => '%s Harus Diisi'));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './foto_akreditasi/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2000;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto_akreditasi')) {

				$data = array(
					'title'  => 'Website TRKJ',
					'title2' => 'Edit Akreditasi',
					'error' => $this->upload->display_errors(),
					'akreditasi' => $this->m_akreditasi->detail($id_akreditasi),
					'isi'	 => 'admin/akreditasi/v_edit'
				);
				$this->load->view('admin/layout/v_wrapper', $data, FALSE);
			} else {
				$upload_data 			 = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image']	 = './foto_akreditasi/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				//menghapus file foto lama
				$akreditasi = $this->m_akreditasi->detail($id_akreditasi);
				if ($akreditasi->foto_akreditasi != "") {
					unlink('./foto_akreditasi/' . $akreditasi->foto_akreditasi);
				}
				//end menghapus foto
				$data = array(
					'id_akreditasi'		=> $id_akreditasi,
					'isi' 				=> $this->input->post('isi'),
					'foto_akreditasi'	=> $upload_data['uploads']['file_name']
				);
				$this->m_akreditasi->edit($data);
				$this->session->set_flashdata('pesan', 'Akreditasi Berhasil Di Reposting !!');
				redirect('akreditasi');
			}
			//end menghapus foto
			$data = array(
				'id_akreditasi'		=> $id_akreditasi,
				'isi'	 	 		=> $this->input->post('id_akreditasi'),
			);
			$this->m_akreditasi->edit($data);
			$this->session->set_flashdata('pesan', 'Akreditasi Berhasil Di Reposting !!');
			redirect('akreditasi');
		}
		$data = array(
			'title'  => 'Website TRKJ',
			'title2' => 'Edit Data Akreditasi',
			'akreditasi' => $this->m_akreditasi->detail($id_akreditasi),
			'isi'	 => 'admin/akreditasi/v_edit'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function delete($id_akreditasi)
	{
		//menghapus file foto lama
		$akreditasi = $this->m_akreditasi->detail($id_akreditasi);
		if ($akreditasi->foto_akreditasi != "") {
			unlink('./foto_akreditasi/' . $akreditasi->foto_akreditasi);
		}
		//end menghapus foto

		$data = array('id_akreditasi' => $id_akreditasi);
		$this->m_akreditasi->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus !!!');
		redirect('akreditasi');
	}
}

/* End of file Akreditasi.php */
