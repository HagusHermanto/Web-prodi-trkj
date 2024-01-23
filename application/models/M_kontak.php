<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_kontak extends CI_Model
{
	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_kontak');
		$this->db->order_by('id_kontak', 'desc');
		return $this->db->get()->result();
	}

	public function add($data)
	{
		$this->db->insert('tbl_kontak', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_kontak', $data['id_kontak']);
		$this->db->update('tbl_kontak', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_kontak', $data['id_kontak']);
		$this->db->delete('tbl_kontak', $data);
	}
}

/* End of file M_kontak.php */
