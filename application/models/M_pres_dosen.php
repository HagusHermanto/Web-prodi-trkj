<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pres_dosen extends CI_Model
{
	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_pres_dosen');
		$this->db->order_by('id_prestasi', 'desc');
		return $this->db->get()->result();
	}

	public function detail($id_prestasi)
	{
		$this->db->select('*');
		$this->db->from('tbl_pres_dosen');
		$this->db->where('id_prestasi', $id_prestasi);
		return $this->db->get()->row();
	}

	public function add($data)
	{
		$this->db->insert('tbl_pres_dosen', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_prestasi', $data['id_prestasi']);
		$this->db->update('tbl_pres_dosen', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_prestasi', $data['id_prestasi']);
		$this->db->delete('tbl_pres_dosen', $data);
	}
}

/* End of file M_pres_dosen.php */
