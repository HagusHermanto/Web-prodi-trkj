<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mitra extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_mitra');
	}

	public function index()
	{
		$data = array(
			'title' 	=> 'Website TRKJ',
			'title2' 	=> 'Data File mitra',
			'mitra'  => $this->m_mitra->lists(),
			'isi' 		=> 'admin/mitra/v_lists',
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->form_validation->set_rules('nama', 'Namar', 'required', 'required', array('required' => '%s Harus Diisi'));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './gambar/mitra/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2000;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('logo')) {
				$data = array(
					'title'   => 'Website TRKJ',
					'title2'  => 'mitra',
					'mitra' => $this->m_mitra->lists(),
					'isi'     => 'admin/mitra/v_add',
				);
				$this->load->view('admin/layout/v_wrapper', $data, FALSE);
			} else {
				$upload_data 			 = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image']	 = './gambar/mitra/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);

				$data = array(
					'nama' 	=> $this->input->post('nama'),
					'logo'	=> $upload_data['uploads']['file_name']
				);
				$this->m_mitra->add($data);
				$this->session->set_flashdata('pesan', 'mitra Berhasil Di Posting !!');
				redirect('mitra');
			}
		}
		$data = array(
			'title'  => 'Website TRKJ',
			'title2' => 'mitra',
			'isi'	 => 'admin/mitra/v_add',
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function edit($id_mitra)
	{
		$this->form_validation->set_rules('nama', 'Kata Pengantar', 'required', 'required', array('required' => '%s Harus Diisi'));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './gambar/mitra/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2000;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('logo')) {

				$data = array(
					'title'  => 'Website TRKJ',
					'title2' => 'Edit mitra',
					'error' => $this->upload->display_errors(),
					'mitra' => $this->m_mitra->detail($id_mitra),
					'isi'	 => 'admin/mitra/v_edit'
				);
				$this->load->view('admin/layout/v_wrapper', $data, FALSE);
			} else {
				$upload_data 			 = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image']	 = './gambar/mitra/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				//menghapus file foto lama
				$mitra = $this->m_mitra->detail($id_mitra);
				if ($mitra->logo != "") {
					unlink('./gambar/mitra/' . $mitra->logo);
				}
				//end menghapus foto
				$data = array(
					'id_mitra'		=> $id_mitra,
					'nama' 		=> $this->input->post('nama'),
					'logo'		=> $upload_data['uploads']['file_name']
				);
				$this->m_mitra->edit($data);
				$this->session->set_flashdata('pesan', 'mitra Berhasil Di Reposting !!');
				redirect('mitra');
			}
			//end menghapus foto
			$data = array(
				'id_mitra'		=> $id_mitra,
				'nama' 		=> $this->input->post('nama'),
			);
			$this->m_mitra->edit($data);
			$this->session->set_flashdata('pesan', 'mitra Berhasil Di Reposting !!');
			redirect('mitra');
		}
		$data = array(
			'title'  => 'Website TRKJ',
			'title2' => 'Add mitra',
			'mitra' => $this->m_mitra->detail($id_mitra),
			'isi'	 => 'admin/mitra/v_edit'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function delete($id_mitra)
	{
		//menghapus file foto lama
		$mitra = $this->m_mitra->detail($id_mitra);
		if ($mitra->gambar != "") {
			unlink('./gambar/mitra/' . $mitra->gambar);
		}
		//end menghapus foto

		$data = array('id_mitra' => $id_mitra);
		$this->m_mitra->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus !!!');
		redirect('mitra');
	}
}

/* End of file mitra.php */
