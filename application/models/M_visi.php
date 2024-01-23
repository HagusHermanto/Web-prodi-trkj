<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_visi extends CI_Model
{
	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_visi');
		$this->db->order_by('id_visi', 'desc');
		return $this->db->get()->result();
	}

	public function detail($id_visi)
	{
		$this->db->select('*');
		$this->db->from('tbl_visi');
		$this->db->where('id_visi', $id_visi);
		return $this->db->get()->row();
	}

	public function add($data)
	{
		$this->db->insert('tbl_visi', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_visi', $data['id_visi']);
		$this->db->update('tbl_visi', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_visi', $data['id_visi']);
		$this->db->delete('tbl_visi', $data);
	}
}

/* End of file M_visi.php */
