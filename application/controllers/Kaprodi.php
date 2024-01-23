<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kaprodi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kaprodi');
	}

	public function index()
	{
		$data = array(
			'title' 	=> 'Website TRKJ',
			'title2' 	=> 'Data File kaprodi',
			'kaprodi'  => $this->m_kaprodi->lists(),
			'isi' 		=> 'admin/kaprodi/v_lists',
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->form_validation->set_rules('nama', 'Namar', 'required', 'required', array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('isi', 'Isi', 'required', 'required', array('required' => '%s Harus Diisi'));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './gambar/kaprodi/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2000;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('gambar')) {
				$data = array(
					'title'   => 'Website TRKJ',
					'title2'  => 'kaprodi',
					'kaprodi' => $this->m_kaprodi->lists(),
					'isi'     => 'admin/kaprodi/v_add',
				);
				$this->load->view('admin/layout/v_wrapper', $data, FALSE);
			} else {
				$upload_data 			 = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image']	 = './gambar/kaprodi/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);

				$data = array(
					'nama' 	=> $this->input->post('nama'),
					'isi' 	=> $this->input->post('isi'),
					'gambar'	=> $upload_data['uploads']['file_name']
				);
				$this->m_kaprodi->add($data);
				$this->session->set_flashdata('pesan', 'kaprodi Berhasil Di Posting !!');
				redirect('kaprodi');
			}
		}
		$data = array(
			'title'  => 'Website TRKJ',
			'title2' => 'kaprodi',
			'isi'	 => 'admin/kaprodi/v_add',
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function edit($id_kaprodi)
	{
		$this->form_validation->set_rules('nama', 'Kata Pengantar', 'required', 'required', array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('nama', 'Kata Pengantar', 'required', 'required', array('required' => '%s Harus Diisi'));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './gambar/kaprodi/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2000;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('gambar')) {

				$data = array(
					'title'  => 'Website TRKJ',
					'title2' => 'Edit kaprodi',
					'error' => $this->upload->display_errors(),
					'kaprodi' => $this->m_kaprodi->detail($id_kaprodi),
					'isi'	 => 'admin/kaprodi/v_edit'
				);
				$this->load->view('admin/layout/v_wrapper', $data, FALSE);
			} else {
				$upload_data 			 = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image']	 = './gambar/kaprodi/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				//menghapus file foto lama
				$kaprodi = $this->m_kaprodi->detail($id_kaprodi);
				if ($kaprodi->gambar != "") {
					unlink('./gambar/kaprodi/' . $kaprodi->gambar);
				}
				//end menghapus foto
				$data = array(
					'id_kaprodi'		=> $id_kaprodi,
					'nama' 		=> $this->input->post('nama'),
					'isi' 		=> $this->input->post('isi'),
					'gambar'		=> $upload_data['uploads']['file_name']
				);
				$this->m_kaprodi->edit($data);
				$this->session->set_flashdata('pesan', 'kaprodi Berhasil Di Reposting !!');
				redirect('kaprodi');
			}
			//end menghapus foto
			$data = array(
				'id_kaprodi'		=> $id_kaprodi,
				'nama' 		=> $this->input->post('nama'),
				'isi' 		=> $this->input->post('isi'),
			);
			$this->m_kaprodi->edit($data);
			$this->session->set_flashdata('pesan', 'kaprodi Berhasil Di Reposting !!');
			redirect('kaprodi');
		}
		$data = array(
			'title'  => 'Website TRKJ',
			'title2' => 'Add kaprodi',
			'kaprodi' => $this->m_kaprodi->detail($id_kaprodi),
			'isi'	 => 'admin/kaprodi/v_edit'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function delete($id_kaprodi)
	{
		//menghapus file foto lama
		$kaprodi = $this->m_kaprodi->detail($id_kaprodi);
		if ($kaprodi->gambar != "") {
			unlink('./gambar/kaprodi/' . $kaprodi->gambar);
		}
		//end menghapus foto

		$data = array('id_kaprodi' => $id_kaprodi);
		$this->m_kaprodi->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus !!!');
		redirect('kaprodi');
	}
}

/* End of file kaprodi.php */
