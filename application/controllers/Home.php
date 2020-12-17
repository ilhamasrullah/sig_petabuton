<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('home/v_home.php');
	}
	public function tempat_json()
	{

		$data = $this->db->get('tb_tempat')->result();

		echo json_encode($data);
	}
	public function foto($kode = null)
	{
		$data = $this->db->limit(1)->get_where('tb_tempat', array('id_tempat' => $kode))->row()->gambar;
		echo json_encode($data);
	}
}
