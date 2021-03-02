<?php
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_jalan');
        $this->load->model('siswaModel');
        $this->load->helper('url');



        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }

    function index()
    {
        $this->load->view('templates/auth_header.php');
        $this->load->view('admin/v_admin');
        $this->load->view('templates/auth_footer.php');
    }
    public function profil()
    {
        $this->load->view('templates/auth_header.php');
        $this->load->view('admin/profil.php');
        $this->load->view('templates/auth_footer.php');
    }
    public function tempat()
    {
        $this->load->view('templates/auth_header.php');
        //  $this->load->view('admin/tempat.php');
        $this->load->view('templates/auth_footer.php');
    }

    public function password()
    {
        $this->load->view('templates/auth_header.php');
        $this->load->view('admin/password.php');
        $this->load->view('templates/auth_footer.php');
    }
    public function jalan()
    {
        // $hasil = $this->db->query("SELECT * FROM tb_tempat");
        // return $hasil;
        $x['data'] = $this->m_jalan->jalan();
        $this->load->view('templates/auth_header.php');
        $this->load->view('admin/jalan.php', $x);
        // $this->load->view('home/jalan.php');
        $this->load->view('templates/auth_footer.php');
    }
    public function hapus($id_tempat)
    {
        $this->m_jalan->Hapus($id_tempat);
        redirect('jalan2');
    }
    public function tambah_data()
    {
        $this->load->view('templates/auth_header.php');
        $this->load->view('admin/tambah_data.php');
        $this->load->view('templates/auth_footer.php');
    }
    // public function input()
    // {
    //     $this->load->view('tambah_data.php');
    // }
    public function proses_input()
    {
        //membuat konfigurasi
        $config = [
            'upload_path' => './assets/upload/',
            'allowed_types' => 'gif|jpg|png',
            'max_size' => 1000, 'max_width' => 1000,
            'max_height' => 1000
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) //jika gagal upload
        {
            $error = array('error' => $this->upload->display_errors()); //tampilkan error
            $this->load->view('admin/tambah_data', $error);
        } else
        //jika berhasil upload
        {
            $file = $this->upload->data();
            //mengambil data di form
            $data = [
                'gambar' => $file['file_name'],
                'nama_jalan' => set_value('nama_jalan'),
                'lat' => set_value('lat'),
                'lng' => set_value('lng'),
                'status_jalan' => set_value('status_jalan'),
                'kecamatan' => set_value('kecamatan'),
                'kelurahan' => set_value('kelurahan'),
                'kerusakan' => set_value('kerusakan'),
                'penyebab' => set_value('penyebab')

            ];
            $this->m_jalan->tambah_data($data); //memasukan data ke database
            redirect('jalan2'); //mengalihkan halaman

        }
    }
}
