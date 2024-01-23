<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Embeded extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_embeded');
	}

	public function index()
	{
		$data = array(
			'title' 	=> 'Website TRKJ',
			'title2' 	=> 'Data File Embeded',
			'embeded'  => $this->m_embeded->lists(),
			'isi' 		=> 'admin/embeded/v_lists',
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
					'title2'  => 'Embeded',
					'embeded' => $this->m_embeded->lists(),
					'isi'     => 'admin/embeded/v_add',
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
				$this->m_embeded->add($data);
				$this->session->set_flashdata('pesan', 'Embeded Berhasil Di Posting !!');
				redirect('embeded');
			}
		}
		$data = array(
			'title'  => 'Website TRKJ',
			'title2' => 'Embeded',
			'isi'	 => 'admin/embeded/v_add',
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function edit($id_embeded)
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
					'title2' => 'Edit Embeded',
					'error' => $this->upload->display_errors(),
					'embeded' => $this->m_embeded->detail($id_embeded),
					'isi'	 => 'admin/embeded/v_edit'
				);
				$this->load->view('admin/layout/v_wrapper', $data, FALSE);
			} else {
				$upload_data 			 = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image']	 = './foto_lab/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				//menghapus file foto lama
				$embeded = $this->m_embeded->detail($id_embeded);
				if ($embeded->foto_lab != "") {
					unlink('./foto_lab/' . $embeded->foto_lab);
				}
				//end menghapus foto
				$data = array(
					'id_embeded'		=> $id_embeded,
					'kata_pengantar' 		=> $this->input->post('kata_pengantar'),
					'foto_lab'		=> $upload_data['uploads']['file_name']
				);
				$this->m_embeded->edit($data);
				$this->session->set_flashdata('pesan', 'Embeded Berhasil Di Reposting !!');
				redirect('embeded');
			}
			//end menghapus foto
			$data = array(
				'id_embeded'		=> $id_embeded,
				'kata_pengantar' 		=> $this->input->post('kata_pengantar'),
			);
			$this->m_embeded->edit($data);
			$this->session->set_flashdata('pesan', 'Embeded Berhasil Di Reposting !!');
			redirect('embeded');
		}
		$data = array(
			'title'  => 'Website TRKJ',
			'title2' => 'Add Embeded',
			'embeded' => $this->m_embeded->detail($id_embeded),
			'isi'	 => 'admin/embeded/v_edit'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function delete($id_embeded)
	{
		//menghapus file foto lama
		$embeded = $this->m_embeded->detail($id_embeded);
		if ($embeded->foto_lab != "") {
			unlink('./foto_lab/' . $embeded->foto_lab);
		}
		//end menghapus foto

		$data = array('id_embeded' => $id_embeded);
		$this->m_embeded->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus !!!');
		redirect('embeded');
	}
}

/* End of file Embeded.php */
