<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_multimedia extends CI_Model
{
	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_multimedia');
		$this->db->order_by('id_multimedia', 'desc');
		return $this->db->get()->result();
	}

	public function detail($id_multimedia)
	{
		$this->db->select('*');
		$this->db->from('tbl_multimedia');
		$this->db->where('id_multimedia', $id_multimedia);
		return $this->db->get()->row();
	}

	public function add($data)
	{
		$this->db->insert('tbl_multimedia', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_multimedia', $data['id_multimedia']);
		$this->db->update('tbl_multimedia', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_multimedia', $data['id_multimedia']);
		$this->db->delete('tbl_multimedia', $data);
	}
}

/* End of file M_multimedia.php */
