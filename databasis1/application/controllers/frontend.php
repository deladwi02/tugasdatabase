<?php

class frontend extends CI_Controller{
	public function index(){
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('content');
		$this->load->view('template/footer');
	}

}