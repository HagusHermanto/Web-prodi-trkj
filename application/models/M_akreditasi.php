<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_akreditasi extends CI_Model
{
	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_akreditasi');
		$this->db->order_by('id_akreditasi', 'desc');
		return $this->db->get()->result();
	}

	public function detail($id_akreditasi)
	{
		$this->db->select('*');
		$this->db->from('tbl_akreditasi');
		$this->db->where('id_akreditasi', $id_akreditasi);
		return $this->db->get()->row();
	}

	public function add($data)
	{
		$this->db->insert('tbl_akreditasi', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_akreditasi', $data['id_akreditasi']);
		$this->db->update('tbl_akreditasi', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_akreditasi', $data['id_akreditasi']);
		$this->db->delete('tbl_akreditasi', $data);
	}
}

/* End of file M_akreditasi.php */
