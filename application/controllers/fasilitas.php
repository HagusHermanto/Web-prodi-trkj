<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_fasilitas');
	}


	public function index()
	{
		$data = array(
			'title' 	=> 'Website TRKJ',
			'title2' 	=> 'Data File Fasilitas',
			'fasilitas'  	=> $this->m_fasilitas->lists(),
			'isi' 		=> 'admin/fasilitas/v_lists',
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->form_validation->set_rules('nama', 'Nama fasilitas', 'required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './foto_fasilitas/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2000;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto_fasilitas')) {
				$data = array(
					'title'   	=> 'Website TRKJ',
					'title2' 	=> 'Add Data fasilitas',
					'fasilitas' 	=> $this->m_fasilitas->lists(),
					'isi'     	=> 'admin/fasilitas/v_add',
				);
				$this->load->view('admin/layout/v_wrapper', $data, FALSE);
			} else {
				$upload_data 			 = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image']	 = './foto_fasilitas/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);

				$data = array(
					'nama' 	=> $this->input->post('nama'),
					'keterangan' 	=> $this->input->post('keterangan'),
					'foto_fasilitas'	=> $upload_data['uploads']['file_name']
				);
				$this->m_fasilitas->add($data);
				$this->session->set_flashdata('pesan', 'Data fasilitas Berhasil Di Posting !!');
				redirect('fasilitas');
			}
		}
		$data = array(
			'title'  => 'Website TRKJ',
			'title2' => 'Add Data fasilitas',
			'isi'	 => 'admin/fasilitas/v_add',
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function edit($id_fasilitas)
	{
		$this->form_validation->set_rules('nama', 'Nama fasilitas', 'required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './foto_fasilitas/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2000;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto_fasilitas')) {

				$data = array(
					'title'  => 'Website TRKJ',
					'title2' => 'Edit Data fasilitas',
					'error' => $this->upload->display_errors(),
					'fasilitas'	=> $this->m_fasilitas->detail($id_fasilitas),
					'isi'	 => 'admin/fasilitas/v_edit'
				);
				$this->load->view('admin/layout/v_wrapper', $data, FALSE);
			} else {
				$upload_data 			 = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image']	 = './foto_fasilitas/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				//menghapus file foto lama
				$fasilitas = $this->m_fasilitas->detail($id_fasilitas);
				if ($fasilitas->foto_fasilitas != "") {
					unlink('./foto_fasilitas/' . $fasilitas->foto_fasilitas);
				}
				//end menghapus foto
				$data = array(
					'id_fasilitas'		=> $id_fasilitas,
					'nama' 	=> $this->input->post('nama'),
					'keterangan' 	=> $this->input->post('keterangan'),
					'foto_fasilitas'		=> $upload_data['uploads']['file_name']
				);
				$this->m_fasilitas->edit($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Di Edit');
				redirect('fasilitas');
			}
			$upload_data 			 = array('uploads' => $this->upload->data());
			$config['image_library'] = 'gd2';
			$config['source_image']	 = './foto_fasilitas/' . $upload_data['uploads']['file_name'];
			$this->load->library('image_lib', $config);

			$data = array(
				'id_fasilitas'		=> $id_fasilitas,
				'nama' 	=> $this->input->post('nama'),
				'keterangan' 	=> $this->input->post('keterangan'),
			);
			$this->m_fasilitas->edit($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Di Edit');
			redirect('fasilitas');
		}
		$data = array(
			'title'  => 'Website TRKJ',
			'title2' => 'Edit Data fasilitas',
			'fasilitas'	=> $this->m_fasilitas->detail($id_fasilitas),
			'isi'	 => 'admin/fasilitas/v_edit'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}


	public function delete($id_fasilitas)
	{
		//menghapus file foto lama
		$fasilitas = $this->m_fasilitas->detail($id_fasilitas);
		if ($fasilitas->foto_fasilitas != "") {
			unlink('./foto_fasilitas/' . $fasilitas->foto_fasilitas);
		}
		//end menghapus foto

		$data = array('id_fasilitas' => $id_fasilitas);
		$this->m_fasilitas->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus !!!');
		redirect('fasilitas');
	}
}

/* End of file fasilitas.php */
