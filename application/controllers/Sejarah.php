<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sejarah extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_sejarah');
	}

	public function index()
	{
		$data = array(
			'title' 	=> 'Website TRKJ',
			'title2' 	=> 'Data File Sejarah',
			'sejarah'  => $this->m_sejarah->lists(),
			'isi' 		=> 'admin/sejarah/v_lists',
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->form_validation->set_rules('judul_sejarah', 'Judul Sejarah', 'required');
		$this->form_validation->set_rules('isi_sejarah', 'Isi Sejarah', 'required', 'required', array('required' => '%s Harus Diisi'));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './foto_sejarah/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2000;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto_sejarah')) {
				$data = array(
					'title'   => 'Website TRKJ',
					'title2'  => 'Sejarah',
					'sejarah' => $this->m_sejarah->lists(),
					'isi'     => 'admin/sejarah/v_add',
				);
				$this->load->view('admin/layout/v_wrapper', $data, FALSE);
			} else {
				$upload_data 			 = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image']	 = './foto_sejarah/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);

				$data = array(
					'judul_sejarah' 	=> $this->input->post('judul_sejarah'),
					'isi_sejarah' 	=> $this->input->post('isi_sejarah'),
					'foto_sejarah'	=> $upload_data['uploads']['file_name']
				);
				$this->m_sejarah->add($data);
				$this->session->set_flashdata('pesan', 'Sejarah Berhasil Di Posting !!');
				redirect('sejarah');
			}
		}
		$data = array(
			'title'  => 'Website TRKJ',
			'title2' => 'Sejarah',
			'isi'	 => 'admin/sejarah/v_add',
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function edit($id_sejarah)
	{
		$this->form_validation->set_rules('judul_sejarah', 'Judul Sejarah', 'required');
		$this->form_validation->set_rules('isi_sejarah', 'Isi Sejarah', 'required', 'required', array('required' => '%s Harus Diisi'));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './foto_sejarah/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2000;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto_sejarah')) {

				$data = array(
					'title'  => 'Website TRKJ',
					'title2' => 'Edit Sejarah',
					'error' => $this->upload->display_errors(),
					'sejarah' => $this->m_sejarah->detail($id_sejarah),
					'isi'	 => 'admin/sejarah/v_edit'
				);
				$this->load->view('admin/layout/v_wrapper', $data, FALSE);
			} else {
				$upload_data 			 = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image']	 = './foto_sejarah/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				//menghapus file foto lama
				$sejarah = $this->m_sejarah->detail($id_sejarah);
				if ($sejarah->foto_sejarah != "") {
					unlink('./foto_sejarah/' . $sejarah->foto_sejarah);
				}
				//end menghapus foto
				$data = array(
					'id_sejarah'		=> $id_sejarah,
					'judul_sejarah' 	=> $this->input->post('judul_sejarah'),
					'isi_sejarah' 		=> $this->input->post('isi_sejarah'),
					'foto_sejarah'		=> $upload_data['uploads']['file_name']
				);
				$this->m_sejarah->edit($data);
				$this->session->set_flashdata('pesan', 'Sejarah Berhasil Di Reposting !!');
				redirect('sejarah');
			}
			//end menghapus foto
			$data = array(
				'id_sejarah'		=> $id_sejarah,
				'judul_sejarah' 	=> $this->input->post('judul_sejarah'),
				'isi_sejarah' 		=> $this->input->post('isi_sejarah'),
			);
			$this->m_sejarah->edit($data);
			$this->session->set_flashdata('pesan', 'Sejarah Berhasil Di Reposting !!');
			redirect('sejarah');
		}
		$data = array(
			'title'  => 'Website TRKJ',
			'title2' => 'Add Sejarah',
			'sejarah' => $this->m_sejarah->detail($id_sejarah),
			'isi'	 => 'admin/sejarah/v_edit'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function delete($id_sejarah)
	{
		//menghapus file foto lama
		$sejarah = $this->m_sejarah->detail($id_sejarah);
		if ($sejarah->foto_sejarah != "") {
			unlink('./foto_sejarah/' . $sejarah->foto_sejarah);
		}
		//end menghapus foto

		$data = array('id_sejarah' => $id_sejarah);
		$this->m_sejarah->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus !!!');
		redirect('sejarah');
	}
}

/* End of file Sejarah.php */
