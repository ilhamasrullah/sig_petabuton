<?php

class m_jalan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function jalan()
    {

        $hasil = $this->db->query("SELECT * FROM tb_tempat");
        return $hasil;
    }

    public function tambah_data($data)
    {
        try {
            $this->db->insert('tb_tempat', $data);
            return true;
        } catch (Exception $e) {
        }
    }
    public function hapus_tempat($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
