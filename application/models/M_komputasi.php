<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_komputasi extends CI_Model
{
	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_komputasi');
		$this->db->order_by('id_komputasi', 'desc');
		return $this->db->get()->result();
	}

	public function detail($id_komputasi)
	{
		$this->db->select('*');
		$this->db->from('tbl_komputasi');
		$this->db->where('id_komputasi', $id_komputasi);
		return $this->db->get()->row();
	}

	public function add($data)
	{
		$this->db->insert('tbl_komputasi', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_komputasi', $data['id_komputasi']);
		$this->db->update('tbl_komputasi', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_komputasi', $data['id_komputasi']);
		$this->db->delete('tbl_komputasi', $data);
	}
}

/* End of file M_komputasi.php */
