<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_jaringan extends CI_Model
{
	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_jaringan');
		$this->db->order_by('id_jaringan', 'desc');
		return $this->db->get()->result();
	}

	public function detail($id_jaringan)
	{
		$this->db->select('*');
		$this->db->from('tbl_jaringan');
		$this->db->where('id_jaringan', $id_jaringan);
		return $this->db->get()->row();
	}

	public function add($data)
	{
		$this->db->insert('tbl_jaringan', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_jaringan', $data['id_jaringan']);
		$this->db->update('tbl_jaringan', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_jaringan', $data['id_jaringan']);
		$this->db->delete('tbl_jaringan', $data);
	}
}

/* End of file M_jaringan.php */
