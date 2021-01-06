<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_jalan');
	}
	public function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('home/index.php');
		$this->load->view('templates/footer.php');
	}
	public function login()
	{
		$this->load->view('templates/header.php');
		$this->load->view('login/V_login.php');
		$this->load->view('templates/footer.php');
	}
	public function profil()
	{
		$this->load->view('templates/header.php');
		$this->load->view('home/profil.php');
		$this->load->view('templates/footer.php');
	}
	public function kontak()
	{
		$this->load->view('templates/header.php');
		$this->load->view('home/kontak.php');
		$this->load->view('templates/footer.php');
	}
	public function jalan()
	{
		// $hasil = $this->db->query("SELECT * FROM tb_tempat");
		// return $hasil;
		$x['data'] = $this->m_jalan->jalan();
		$this->load->view('templates/header.php');
		$this->load->view('home/jalan.php', $x);

		// $this->load->view('home/jalan.php');
		$this->load->view('templates/footer.php');
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
