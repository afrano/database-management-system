<?php

class User_model extends ci_model {

    public $nama_tabel = 'tb_user';
    public $data_pasien = 'data_pasien';
    public $data_tumor_pasien = 'data_tumor_pasien';
    public $Topography = 'topography';
    public $morphology = 'morphology';
    public $diagnosis_cancer = 'diagnosis_cancer';

    function __construct() {
        parent::__construct();
    }

    function get_alldata($table) {
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $query;
    }

    function get_all() {
        $this->db->join('hak_akses', "hak_akses.id_hak_akses = login.id_hak_akses", 'LEFT');
        $query = $this->db->get('login');
        return $query;
    }

    function get_allPasien() {
        $data = $this->db->query('SELECT * from data_pasien ');
        return $data;
    }

    function get_DetailPasien($NIK) {
        $data = $this->db->query('select * from data_Pasien p, data_tumor_pasien dt, treatment_pasien tp where p.NIK = "' . $NIK . '" and dt.NIK = "' . $NIK . '" and tp.NIK = "' . $NIK . '"');
        return $data;
    }

    function get_joinPasienTumor() {
        $this->db->join('data_tumor_pasien', "data_tumor_pasien.NIK = $this->data_pasien.NIK", 'LEFT');
        $query = $this->db->get($this->data_pasien);
        return $query;
    }

    function get_byid($id_user) {
        $query = $this->db->get_where($this->nama_tabel, array('id_user' => $id_user));
        if ($query)
            return $query;
        return false;
    }

    function get_DetilPasien($NIK) {
        $query = $this->db->get_where($this->data_pasien, array('NIK' => $NIK));
        if ($query)
            return $query;
        return false;
    }


    function get_byNIK($NIK) {
        $query = $this->db->get_where($this->data_tumor_pasien, array('NIK' => $NIK));
        if ($query)
            return $query;
        return false;
    }

    function getdata_bykode($tabel, $ID, $Kode) {
        $query = $this->db->get_where($tabel, array($ID => $Kode));
        if ($query)
            return $query;
        return false;
    }

    function get_byusername($id_user) {
        $query = $this->db->get_where($this->nama_tabel, array('username' => $id_user));
        if ($query)
            return $query;
        return false;
    }

    function tambah($data_user) {
        $query = $this->db->insert($this->nama_tabel, $data_user);
        if ($query)
            return $query;
        return false;
    }

    function tambahData($table, $data_user) {
        $query = $this->db->insert($table, $data_user);
        if ($query)
            return $query;
        return false;
    }

    public function Cekdata($tabel, $where, $id) {
        $data = $this->db->query('SELECT * from ' . $tabel . ' where ' . $where . ' = "' . $id . '" ');
        return $data;
    }

    function ubah($id_user, $data_user) {
        $this->db->where('id_user', $id_user);
        $query = $this->db->update($this->nama_tabel, $data_user, array('id_user' => $id_user));
        if ($query)
            return $query;
        return false;
    }

    function hapus($id_user) {
        $this->db->where('id_user', $id_user);
        $query = $this->db->delete($this->nama_tabel);
        if ($query)
            return $query;
        return false;
    }

    function hapusPasien($NIK) {
        $this->db->where('NIK', $NIK);
        $query = $this->db->delete($this->data_tumor_pasien, $this->data_pasien);
        //  $query1 = $this->db->delete($this->data_pasien);
        if ($query)
            return $query;
        return false;
    }

    function ubahdata($tabel, $where, $id, $data) {
        $this->db->where($where, $id);
        $query = $this->db->update($tabel, $data, array($where => $id));
        if ($query)
            return $query;
        return false;
    }

    public function Hapusdata($table, $where) {
        return $this->db->delete($table, $where);
    }

    function get_all_provinsi() {
        $query = $this->db->query('select * from wilayah_provinsi order by nama asc');
        return $query->result();
    }
    function totalpasien(){
        $query = $this->db->query('SELECT count(NIK) as total FROM data_pasien');
        return $query->result();
    }
    

}
