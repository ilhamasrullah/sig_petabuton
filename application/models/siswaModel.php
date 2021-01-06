<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class SiswaModel extends CI_Model
{
    // Fungsi untuk menampilkan semua data siswa
    public function view()
    {
        return $this->db->get('tb_tempat')->result();
    }

    // Fungsi untuk menampilkan data siswa berdasarkan NIS nya
    public function view_by($tempat)
    {
        $this->db->where('id_tempat', $tempat);
        return $this->db->get('tb_tempat')->row();
    }

    // Fungsi untuk validasi form tambah dan ubah
    public function validation($mode)
    {
        $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

        // Tambahkan if apakah $mode save atau update
        // Karena ketika update, NIS tidak harus divalidasi
        // Jadi NIS di validasi hanya ketika menambah data siswa saja
        if ($mode == "save")
            $this->form_validation->set_rules('input_tempat', 'id_tempat', 'required|numeric|max_length[11]');
        $this->form_validation->set_rules('input_nama', 'Nama_jalan', 'required|max_length[255]');
        $this->form_validation->set_rules('input_lat', 'lat', 'required');
        $this->form_validation->set_rules('input_lng', 'lng', 'required');
        $this->form_validation->set_rules('input_status_jalan', 'status_jalan', 'required|max_length[255]');
        $this->form_validation->set_rules('input_kecamatan', 'kecamatan', 'required|max_length[255]');
        $this->form_validation->set_rules('input_penyebab', 'penyebab', 'required');
        $this->form_validation->set_rules('input_keluarahan', 'keluarahan', 'required|max_length[255]');

        if ($this->form_validation->run()) // Jika validasi benar
            return TRUE; // Maka kembalikan hasilnya dengan TRUE
        else // Jika ada data yang tidak sesuai validasi
            return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }

    // Fungsi untuk melakukan simpan data ke tabel siswa
    public function save()
    {
        $data = array(
            "nis" => $this->input->post('input_nis'),
            "nama" => $this->input->post('input_nama'),
            "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
            "telp" => $this->input->post('input_telp'),
            "alamat" => $this->input->post('input_alamat')
        );

        $this->db->insert('tb_tempat', $data); // Untuk mengeksekusi perintah insert data
    }

    // Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
    public function edit($nis)
    {
        $data = array(
            "nama" => $this->input->post('input_nama'),
            "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
            "telp" => $this->input->post('input_telp'),
            "alamat" => $this->input->post('input_alamat')
        );

        $this->db->where('nis', $nis);
        $this->db->update('tb_tempat', $data); // Untuk mengeksekusi perintah update data
    }

    // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
    public function delete($nis)
    {
        $this->db->where('nis', $nis);
        $this->db->delete('tb_tempat'); // Untuk mengeksekusi perintah delete data
    }
}
