<?php
class AuthModel extends CI_Model{
    function check($nisn, $password){
        $get = $this->db->select('s.nama, s.id')
                ->from('siswa s')
                ->where([
                    "REPLACE(tanggal_lahir, '-', '') =" => $password,
                    "s.nisn" => $nisn
                ])->get();
        return $get;
    }

    function getSiswaById($siswaid){
        return $this->db->get_where('siswa', ['id' => $siswaid])->row();
    }
}