<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpustakaan_Model extends CI_Model
{
	var $table = "buku",
	    $kode_buku = "kode_buku",
	    $judul = "judul",
	    $Penerbit = "Penerbit",
	    $Pengarang = "Pengarang";

	public function tambah($data){
		return $this->db->insert($table, $data);
	}

	public function ambil($data){
		return $this->db->get($table, $data)->result();
	}

}