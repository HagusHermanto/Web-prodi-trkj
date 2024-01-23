<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_embeded extends CI_Model
{
	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_embeded');
		$this->db->order_by('id_embeded', 'desc');
		return $this->db->get()->result();
	}

	public function detail($id_embeded)
	{
		$this->db->select('*');
		$this->db->from('tbl_embeded');
		$this->db->where('id_embeded', $id_embeded);
		return $this->db->get()->row();
	}

	public function add($data)
	{
		$this->db->insert('tbl_embeded', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_embeded', $data['id_embeded']);
		$this->db->update('tbl_embeded', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_embeded', $data['id_embeded']);
		$this->db->delete('tbl_embeded', $data);
	}
}

/* End of file M_embeded.php */
