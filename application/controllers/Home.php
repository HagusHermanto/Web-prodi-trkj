<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');
		$this->load->model('m_kaprodi');
	}

	public function index()
	{
		$data = array(
			'title' => 'Home',
			'berita' => $this->m_home->slider_berita(),
			'kaprodi'   => $this->m_home->kaprodi(),
			'mitra'   => $this->m_home->mitra(),
			'pres_mhs'   => $this->m_home->pres_mhs(),
			'dosen'   => $this->m_home->dosen(),
			'isi' 	=> 'v_home'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}	

	public function download()
	{
		$data = array(
			'title' 	=> 'Download',
			'download' 	=> $this->m_home->download(),
			'isi'		=> 'v_download'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function mk()
	{
		$data = array(
			'title' 	=> 'Mata Kuliah',
			'download' 	=> $this->m_home->mk(),
			'isi'		=> 'v_mk'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function berita()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url('home/berita');
		$config['total_rows'] = count($this->m_home->total_berita());
		$config['per_page'] = 8;
		$config['uri_segmen'] = 3;
		//start dan limit
		$limit = $config['per_page'];
		$start = ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
		//--------------------
		$config['first_link']		= 'First';
		$config['last_link']		= 'Last';
		$config['next_link']		= 'Next';
		$config['prev_link']		= 'Prev';
		$config['full_tag_open']	= '<div class="pagination_container d-flex flex-row align-items-center justify-content-start text-center"><ul class="pagination_list">';
		$config['num_tag_open']		= '<li>';
		$config['num_tag_close']	= '</li>';
		$config['cur_tag_open']		= '<li class="active"><a>';
		$config['cur_tag_close']	= '</a></li>';
		$config['next_tag_open']	= '<li>';
		$config['next_tag_close']	= '</li>';
		$config['prev_tag_open']	= '<li>';
		$config['prev_tag_close']	= '</li>';
		$config['firts_tag_open']	= '<li>';
		$config['firts_tag_close']	= '</li>';
		$config['last_tag_open']	= '<li>';
		$config['last_tag_close']	= '</li>';
		$config['full_tag_close']	= '</ul></div>';
		//------------------------
		$this->pagination->initialize($config);

		$data = array(
			'paginasi'		=> $this->pagination->create_links(),
			'latest_berita'	=> $this->m_home->latest_berita(),
			'berita' 		=> $this->m_home->berita($limit, $start),
			'title' 		=> 'Berita',
			'isi'			=> 'v_berita'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function detail_berita($slug_berita)
	{
		$data = array(
			'title' 	=> 'Detail Berita',
			'latest_berita'	=> $this->m_home->latest_berita(),
			'berita' 	=> $this->m_home->detail_berita($slug_berita),
			'isi'		=> 'v_detail_berita'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function visi()
	{
		$data = array(
			'title' 	=> 'Visi Misi',
			'visi' 		=> $this->m_home->visi(),
			'isi'		=> 'v_visi'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function sejarah()
	{
		$data = array(
			'title' 		=> 'Sejarah',
			'sejarah' 		=> $this->m_home->sejarah(),
			'isi'			=> 'v_sejarah'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function gallery()
	{
		$data = array(
			'title' 	=> 'Gallery Foto',
			'gallery' 	=> $this->m_home->gallery(),
			'isi'		=> 'v_gallery'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function detail_gallery($id_gallery)
	{
		$data = array(
			'title' 	=> 'Detail Gallery Foto',
			'gallery' 	=> $this->m_home->detail_gallery($id_gallery),
			'nama_gallery' => $this->m_home->nama_galery($id_gallery),
			'isi'		=> 'v_detail_gallery'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function pres_mhs()
	{
		$data = array(
			'title' 		=> 'Prestasi Mahasiswa',
			'pres_mhs' 		=> $this->m_home->pres_mhs(),
			'isi'			=> 'v_pres_mhs'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function pres_dosen()
	{
		$data = array(
			'title' 		=> 'Prestasi Dosen',
			'pres_dosen' 		=> $this->m_home->pres_dosen(),
			'isi'			=> 'v_pres_dosen'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function penelitian_dosen()
	{
		$data = array(
			'title' 				=> 'Penelitian Dosen',
			'penelitian_dosen' 		=> $this->m_home->penelitian_dosen(),
			'isi'					=> 'v_penelitian_dosen'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function penelitian_mahasiswa()
	{
		$data = array(
			'title' 					=> 'Penelitian Mahasiswa',
			'penelitian_mahasiswa' 		=> $this->m_home->penelitian_mahasiswa(),
			'isi'						=> 'v_penelitian_mahasiswa'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function akreditasi()
	{
		$data = array(
			'title' 					=> 'Akreditasi TRKJ',
			'akreditasi'		 		=> $this->m_home->akreditasi(),
			'isi'						=> 'v_akreditasi'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function jaringan()
	{
		$data = array(
			'title' 					=> 'Jaringan TRKJ',
			'jaringan'		 		=> $this->m_home->jaringan(),
			'isi'						=> 'v_jaringan'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function komputasi()
	{
		$data = array(
			'title' 					=> 'Komputasi TRKJ',
			'komputasi'		 		=> $this->m_home->komputasi(),
			'isi'						=> 'v_komputasi'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function multimedia()
	{
		$data = array(
			'title' 					=> 'Multimedia TRKJ',
			'multimedia'		 		=> $this->m_home->multimedia(),
			'isi'						=> 'v_multimedia'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function embeded()
	{
		$data = array(
			'title' 					=> 'Embeded TRKJ',
			'embeded'		 			=> $this->m_home->embeded(),
			'isi'						=> 'v_embeded'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function dosen()
	{
		$data = array(
			'title' 				=> 'Dosen TRKJ',
			'dosen'		 			=> $this->m_home->dosen(),
			'isi'					=> 'v_dosen'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function fasilitas()
	{
		$data = array(
			'title' 				=> 'Fasilitas TRKJ',
			'fasilitas'		 			=> $this->m_home->fasilitas(),
			'isi'					=> 'v_fasilitas'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function kontak()
	{
		$data = array(
			'title' 				=> 'Kontak TRKJ',
			// 'fasilitas'		 			=> $this->m_home->fasilitas(),
			'isi'					=> 'v_kontak'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}
}

/* End of file Home.php */
