<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pres_mhs extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pres_mhs');
	}


	public function index()
	{
		$data = array(
			'title'		=> 'Website TRKJ',
			'title2'	=> 'Prestasi Mahasiswa',
			'pres_mhs'  => $this->m_pres_mhs->lists(),
			'isi'		=> 'admin/pres_mhs/v_lists',
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->form_validation->set_rules('nama', 'Nama Kelompok', 'required');
		$this->form_validation->set_rules('juara', 'Juara - Lomba', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './foto_pres/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2000;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto')) {
				$data = array(
					'title' 	 => 'Website TRKJ',
					'title2'	 => 'Add Prestasi Mahasiswa',
					'pres_mhs' => $this->m_pres_mhs->lists(),
					'isi'		 => 'admin/pres_mhs/v_add',
				);
				$this->load->view('admin/layout/v_wrapper', $data, FALSE);
			} else {
				$upload_data 			 = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image']	 = './foto_pres/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);

				$data = array(
					'nama'	=> $this->input->post('nama'),
					'juara'	=> $this->input->post('juara'),
					'foto'	=> $upload_data['uploads']['file_name']
				);
				$this->m_pres_mhs->add($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahakan !!');
				redirect('pres_mhs');
			}
		}
		$data = array(
			'title'  => 'Website TRKJ',
			'title2' => 'Add Data Prestasi Mahasiswa',
			'isi'	 => 'admin/pres_mhs/v_add',
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function edit($id_prestasi)
	
	{
		$this->form_validation->set_rules('nama', 'Nama Kelompok', 'required');
		$this->form_validation->set_rules('juara', 'Juara - Lomba', 'required');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './foto_pres/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2000;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto')) {

				$data = array(
					'title'  => 'Website TRKJ',
					'title2' => 'Edit Data Prestasi Mahasiswa',
					'error' => $this->upload->display_errors(),
					'pres_mhs'	=> $this->m_pres_mhs->detail($id_prestasi),
					'isi'	 => 'admin/pres_mhs/v_edit'
				);
				$this->load->view('admin/layout/v_wrapper', $data, FALSE);
			} else {
				$upload_data 			 = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image']	 = './foto_pres/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				//menghapus file foto lama
				$pres_mhs = $this->m_pres_mhs->detail($id_prestasi);
				if ($pres_mhs->foto != "") {
					unlink('./foto_pres/' . $pres_mhs->foto);
				}
				//end menghapus foto
				$data = array(
					'id_prestasi'		=> $id_prestasi,
					'nama'				=> $this->input->post('nama'),
					'juara'				=> $this->input->post('juara'),
					'foto'		=> $upload_data['uploads']['file_name']
				);
				$this->m_pres_mhs->edit($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Di Edit');
				redirect('pres_mhs');
			}
			$upload_data 			 = array('uploads' => $this->upload->data());
			$config['image_library'] = 'gd2';
			$config['source_image']	 = './foto_pres/' . $upload_data['uploads']['file_name'];
			$this->load->library('image_lib', $config);

			$data = array(
				'id_prestasi'		=> $id_prestasi,
				'nama'				=> $this->input->post('nama'),
				'juara'				=> $this->input->post('juara'),
			);
			$this->m_pres_mhs->edit($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Di Edit');
			redirect('pres_mhs');
		}
		$data = array(
			'title'  => 'Website TRKJ',
			'title2' => 'Edit Data Prestasi Mahasiswa',
			'pres_mhs'	=> $this->m_pres_mhs->detail($id_prestasi),
			'isi'	 => 'admin/pres_mhs/v_edit'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function delete($id_prestasi)
	{
		$data = array(
			'id_prestasi'	=> $id_prestasi,
		);
		$this->m_pres_mhs->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!');
		redirect('pres_mhs');
	}
}

/* End of file Pres_mhs.php */
