<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function index()
	{
		$nama = [
			'nama_depan' => 'Vina',
			'nama_belakang' => 'Aulya'
		];

		$nama = json_encode($nama);
		$this->db->insert('tabel_user', array('nama'=> $nama));
	}

	public function tampilData()
	{
		$data['row'] = $this->db->get('tabel_user')->result();
		$this->load->view('welcome_message', $data);
	}
}
