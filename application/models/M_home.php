<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{
	public function download()
	{
		$this->db->select('*');
		$this->db->from('tbl_file');
		$this->db->order_by('id_file', 'desc');
		return $this->db->get()->result();
	}

	public function mk()
	{
		$this->db->select('*');
		$this->db->from('tbl_mk');
		$this->db->order_by('id_mk', 'desc');
		return $this->db->get()->result();
	}

	public function kaprodi()
	{
		$this->db->select('*');
		$this->db->from('tbl_kata_kaprodi');
		$this->db->order_by('id_kaprodi', 'desc');
		return $this->db->get()->result();
	}

	public function mitra()
	{
		$this->db->select('*');
		$this->db->from('tbl_mitra');
		$this->db->order_by('id_mitra', 'desc');
		return $this->db->get()->result();
	}

	public function berita($limit, $start)
	{
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
		$this->db->order_by('id_berita', 'desc');
		$this->db->limit($limit, $start);
		return $this->db->get()->result();
	}

	public function total_berita()
	{
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
		$this->db->order_by('id_berita', 'desc');
		return $this->db->get()->result();
	}

	public function detail_berita($slug_berita)
	{
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
		$this->db->where('slug_berita', $slug_berita);
		return $this->db->get()->row();
	}

	public function latest_berita()
	{
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
		$this->db->order_by('id_berita', 'desc');
		$this->db->limit(10);
		return $this->db->get()->result();
	}

	public function slider_berita()
	{
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('tbl_user', 'tbl_user.id_user = tbl_berita.id_user', 'left');
		$this->db->order_by('id_berita', 'desc');
		$this->db->limit(6);
		return $this->db->get()->result();
	}

	public function visi()
	{
		$this->db->select('*');
		$this->db->from('tbl_visi');
		$this->db->order_by('id_visi', 'desc');
		return $this->db->get()->result();
	}

	public function sejarah()
	{
		$this->db->select('*');
		$this->db->from('tbl_sejarah');
		$this->db->order_by('id_sejarah', 'desc');
		return $this->db->get()->result();
	}

	public function gallery()
	{
		$this->db->select('tbl_gallery.*,count(tbl_foto.id_gallery) as jml_foto');
		$this->db->from('tbl_gallery');
		$this->db->join('tbl_foto', 'tbl_foto.id_gallery = tbl_gallery.id_gallery', 'left');
		$this->db->group_by('tbl_gallery.id_gallery');
		$this->db->order_by('tbl_gallery.id_gallery', 'desc');
		return $this->db->get()->result();
	}

	public function detail_gallery($id_gallery)
	{
		$this->db->select('*');
		$this->db->from('tbl_foto');
		$this->db->where('id_gallery', $id_gallery);
		$this->db->order_by('id_foto', 'desc');
		return $this->db->get()->result();
	}

	public function nama_galery($id_gallery)
	{
		$this->db->select('*');
		$this->db->from('tbl_gallery');
		$this->db->where('id_gallery', $id_gallery);
		return $this->db->get()->row();
	}

	public function pres_mhs()
	{
		$this->db->select('*');
		$this->db->from('tbl_prestasi');
		$this->db->order_by('id_prestasi', 'asc');
		return $this->db->get()->result();
	}

	public function pres_dosen()
	{
		$this->db->select('*');
		$this->db->from('tbl_pres_dosen');
		$this->db->order_by('id_prestasi', 'desc');
		return $this->db->get()->result();
	}

	public function penelitian_dosen()
	{
		$this->db->select('*');
		$this->db->from('tb_penelitian');
		$this->db->order_by('id_penelitian', 'desc');
		return $this->db->get()->result();
	}

	public function penelitian_mahasiswa()
	{
		$this->db->select('*');
		$this->db->from('tbl_penelitian_mahasiswa');
		$this->db->order_by('id_penelitian', 'desc');
		return $this->db->get()->result();
	}

	public function akreditasi()
	{
		$this->db->select('*');
		$this->db->from('tbl_akreditasi');
		$this->db->order_by('id_akreditasi', 'desc');
		return $this->db->get()->result();
	}

	public function jaringan()
	{
		$this->db->select('*');
		$this->db->from('tbl_jaringan');
		$this->db->order_by('id_jaringan', 'desc');
		return $this->db->get()->result();
	}

	public function komputasi()
	{
		$this->db->select('*');
		$this->db->from('tbl_komputasi');
		$this->db->order_by('id_komputasi', 'desc');
		return $this->db->get()->result();
	}

	public function multimedia()
	{
		$this->db->select('*');
		$this->db->from('tbl_multimedia');
		$this->db->order_by('id_multimedia', 'desc');
		return $this->db->get()->result();
	}

	public function embeded()
	{
		$this->db->select('*');
		$this->db->from('tbl_embeded');
		$this->db->order_by('id_embeded', 'desc');
		return $this->db->get()->result();
	}

	public function dosen()
	{
		$this->db->select('*');
		$this->db->from('tbl_dosen');
		$this->db->order_by('id_dosen', 'desc');
		return $this->db->get()->result();
	}

	public function fasilitas()
	{
		$this->db->select('*');
		$this->db->from('tbl_fasilitas');
		$this->db->order_by('id_fasilitas', 'desc');
		return $this->db->get()->result();
	}
}

/* End of file M_home.php */
