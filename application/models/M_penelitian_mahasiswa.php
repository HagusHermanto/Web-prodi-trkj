<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_penelitian_mahasiswa extends CI_Model
{
	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_penelitian_mahasiswa');
		$this->db->order_by('id_penelitian', 'DESC');
		return $this->db->get()->result();
	}

	public function detail($id_penelitian)
	{
		$this->db->select('*');
		$this->db->from('tbl_penelitian_mahasiswa');
		$this->db->where('id_penelitian', $id_penelitian);
		return $this->db->get()->row();
	}

	public function add($data)
	{
		$this->db->insert('tbl_penelitian_mahasiswa', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_penelitian', $data['id_penelitian']);
		$this->db->update('tbl_penelitian_mahasiswa', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_penelitian', $data['id_penelitian']);
		$this->db->delete('tbl_penelitian_mahasiswa', $data);
	}
}

/* End of file M_penelitian_mahasiswa.php */
