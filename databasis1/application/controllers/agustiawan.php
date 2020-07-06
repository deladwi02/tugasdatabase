<?php

class Mahasiswa extends CI_Controller{
	public function index(){
		$data['agustiawan'] = $this->m_agustiawan->view_agn()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('mahasiswa', $data);
		$this->load->view('template/footer');
	}

	public function add(){
		$npm	= $this->input->post('npm');
		$nama	= $this->input->post('nama');
		$jk	= $this->input->post('jk');
		$prodi	= $this->input->post('prodi');

		$data = array(
						'npm'		=> $npm,
						'nama'		=> $nama,
						'jk'		=> $jk,
						'prodi'		=> $prodi,
				
					);
		$this->m_agustiawan->input_data($data,'tb_agustiawan');
		redirect('agustiawan/index');
	}

	public  function edit($id){
		$where = array('$id');
		$data['agustiawan']=$this->m_agustiawan->edit_data($where,'tb_agustiawan')->result();

		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('edit', $data);
		$this->load->view('template/footer');
	}

	public function update(){
		$id = $this->input->post('id');
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');
		$jk = $this->input->post('jk');
		$prodi = $this->input->post('prodi');

		$data = array(
						'npm'		=> $npm,
						'nama'		=> $nama,
						'jk'		=> $jk,
						'prodi'		=> $prodi

					);
		$where = array(
				'id' => $id
			);
		$this->m_mahasiswa->update_data($where, $data, 'tb_agustiawan');
		redirect('agustiawan/index');
	}

	public function delete($id){
		$where = array ('id' => $id);
		$this->m_mahasiswa->delete_data($where, 'tb_agustiawan');
		redirect('austiawan/index');
	}
}