<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_mk extends CI_Model
{
	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_mk');
		$this->db->order_by('id_mk', 'desc');
		return $this->db->get()->result();
	}

	public function add($data)
	{
		$this->db->insert('tbl_mk', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_mk', $data['id_mk']);
		$this->db->update('tbl_mk', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_mk', $data['id_mk']);
		$this->db->delete('tbl_mk', $data);
	}
}

/* End of file M_mk.php */
