<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_kaprodi extends CI_Model
{
	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_kata_kaprodi');
		$this->db->order_by('id_kaprodi', 'desc');
		return $this->db->get()->result();
	}

	public function detail($id_kaprodi)
	{
		$this->db->select('*');
		$this->db->from('tbl_kata_kaprodi');
		$this->db->where('id_kaprodi', $id_kaprodi);
		return $this->db->get()->row();
	}

	public function add($data)
	{
		$this->db->insert('tbl_kata_kaprodi', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_kaprodi', $data['id_kaprodi']);
		$this->db->update('tbl_kata_kaprodi', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_kaprodi', $data['id_kaprodi']);
		$this->db->delete('tbl_kata_kaprodi', $data);
	}
}

/* End of file M_kaprodi.php */
