<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpustakaan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Perpustakaan_Model');
	}
	
	public function index(){
		$this->db->select("*");
		$this->db->from("buku");

		$result = $this->db->get()->result();
		$parameter["databuku"] = $result;

		$this->load->view("Header");
		$this->load->view("HomePerpustakaan",$parameter);
		$this->load->view("Footer");
	
}

	public function list_data(){

	}

	public function edit(){

	}

	public function hapus(){

	}

	
}
