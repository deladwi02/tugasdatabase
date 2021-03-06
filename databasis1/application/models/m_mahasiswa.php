<?php

class m_mahasiswa extends CI_Model{
	public function view_mhs(){
		return $this->db->get('tb_mahasiswa');
	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_data($where, $table){
		return $this->db->get_where($table, $where);
	}

	public function update_data($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function delete_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}
 }