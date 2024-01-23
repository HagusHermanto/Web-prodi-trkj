<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Multimedia extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_multimedia');
	}

	public function index()
	{
		$data = array(
			'title' 	=> 'Website TRKJ',
			'title2' 	=> 'Data File Multimedia',
			'multimedia'  => $this->m_multimedia->lists(),
			'isi' 		=> 'admin/multimedia/v_lists',
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
					'title2'  => 'Multimedia',
					'multimedia' => $this->m_multimedia->lists(),
					'isi'     => 'admin/multimedia/v_add',
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
				$this->m_multimedia->add($data);
				$this->session->set_flashdata('pesan', 'Multimedia Berhasil Di Posting !!');
				redirect('multimedia');
			}
		}
		$data = array(
			'title'  => 'Website TRKJ',
			'title2' => 'Multimedia',
			'isi'	 => 'admin/multimedia/v_add',
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function edit($id_multimedia)
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
					'title2' => 'Edit Multimedia',
					'error' => $this->upload->display_errors(),
					'multimedia' => $this->m_multimedia->detail($id_multimedia),
					'isi'	 => 'admin/multimedia/v_edit'
				);
				$this->load->view('admin/layout/v_wrapper', $data, FALSE);
			} else {
				$upload_data 			 = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image']	 = './foto_lab/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				//menghapus file foto lama
				$multimedia = $this->m_multimedia->detail($id_multimedia);
				if ($multimedia->foto_lab != "") {
					unlink('./foto_lab/' . $multimedia->foto_lab);
				}
				//end menghapus foto
				$data = array(
					'id_multimedia'		=> $id_multimedia,
					'kata_pengantar' 		=> $this->input->post('kata_pengantar'),
					'foto_lab'		=> $upload_data['uploads']['file_name']
				);
				$this->m_multimedia->edit($data);
				$this->session->set_flashdata('pesan', 'Multimedia Berhasil Di Reposting !!');
				redirect('multimedia');
			}
			//end menghapus foto
			$data = array(
				'id_multimedia'		=> $id_multimedia,
				'kata_pengantar' 		=> $this->input->post('kata_pengantar'),
			);
			$this->m_multimedia->edit($data);
			$this->session->set_flashdata('pesan', 'Multimedia Berhasil Di Reposting !!');
			redirect('multimedia');
		}
		$data = array(
			'title'  => 'Website TRKJ',
			'title2' => 'Add Multimedia',
			'multimedia' => $this->m_multimedia->detail($id_multimedia),
			'isi'	 => 'admin/multimedia/v_edit'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function delete($id_multimedia)
	{
		//menghapus file foto lama
		$multimedia = $this->m_multimedia->detail($id_multimedia);
		if ($multimedia->foto_lab != "") {
			unlink('./foto_lab/' . $multimedia->foto_lab);
		}
		//end menghapus foto

		$data = array('id_multimedia' => $id_multimedia);
		$this->m_multimedia->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus !!!');
		redirect('multimedia');
	}
}

/* End of file Multimedia.php */
