<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_mitra extends CI_Model
{
	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_mitra');
		$this->db->order_by('id_mitra', 'desc');
		return $this->db->get()->result();
	}

	public function detail($id_mitra)
	{
		$this->db->select('*');
		$this->db->from('tbl_mitra');
		$this->db->where('id_mitra', $id_mitra);
		return $this->db->get()->row();
	}

	public function add($data)
	{
		$this->db->insert('tbl_mitra', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_mitra', $data['id_mitra']);
		$this->db->update('tbl_mitra', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_mitra', $data['id_mitra']);
		$this->db->delete('tbl_mitra', $data);
	}
}

/* End of file M_mitra.php */
