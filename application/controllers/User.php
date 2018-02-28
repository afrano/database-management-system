<?php

class User extends ci_controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        cek_login();
        cek_hakakses(array(1));
    }

    function index() {
        $data['data_user'] = $this->user_model->get_all();
        $data['konten'] = 'user/v_user';
        $data['title'] = 'Data User';
        $this->load->view('dashboard/dashboard', $data);
    }

    function tambah_user() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('hak_akses', 'hak_akses', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        if ($this->form_validation->run()) {
            $data_simpan = array(
                'username' => $_POST['username'],
                'password' => md5($_POST['password']),
                'nama' => $_POST['nama'],
                'hak_akses' => $_POST['hak_akses'],
                'status' => $_POST['status'],
            );

            if ($this->user_model->tambah($data_simpan)) {
                $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                redirect('user');
            } else {
                $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                redirect('user');
            }
        } else {
            $data['isi'] = 'user/tambah_user';
            $data['title'] = 'Data User';
            $this->load->view('dashboard/dashboard', $data);
        }
    }

    function ubah($id_user = null) {
        if ($data_user = $this->user_model->get_byid($id_user)) {
            $this->form_validation->set_rules('username', 'Username', 'required');
            //   $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('hak_akses', 'hak_akses', 'required');
            $this->form_validation->set_rules('status', 'status', 'required');
            if ($this->form_validation->run()) {
                $data_simpan = array(
                    'username' => $_POST['username'],
                    //         'password' => md5($_POST['password']),
                    'nama' => $_POST['nama'],
                    'hak_akses' => $_POST['hak_akses'],
                    'status' => $_POST['status'],
                );

                if ($this->user_model->ubah($id_user, $data_simpan)) {
                    $this->session->set_flashdata('pesan_sukses', 'Data Berhasil DIsimpan');
                    redirect('user');
                } else {
                    $this->session->set_flashdata('pesan_error', 'Data Gagal Disimpan');
                    redirect('user');
                }
            } else {
                $data['row'] = $data_user->row();
                $data['isi'] = 'user/ubah_user';
                $data['title'] = 'Data User';
                $this->load->view('dashboard/dashboard', $data);
            }
        } else {
            echo 'Data tidak Ditemukan';
        }
    }

    function aktif($id) {
        if (isset($id)) { //memastikan ID user exist
            if ($data_user = $this->user_model->get_byid($id)) { //cek databse id_user ada
                $row = $data_user->row();
                if ($row->status == 0) {
                    //sesuaikan nama tabelnya dan primary key nya
                    $this->db->update('tb_user', array('status' => 1), array('id_user' => $id));
                    redirect('user');
                } else {
                    //sesuaikan nama tabelnya dan primary key nya
                    $this->db->update('tb_user', array('status' => 0), array('id_user' => $id));
                    redirect('user');
                }
            } else {
                echo 'Data Tidak Ditemukan';
            }
        } else {
            echo 'error disallowed uri';
        }
    }

    function hapus($id_user = null) {
        if ($this->user_model->get_byid($id_user)) {
            if ($this->user_model->hapus($id_user)) {
                $this->session->set_flashdata('pesan_sukses', 'Data berhasil Di Hapus');
                redirect('user');
            }
        } else {
            echo "Data Tidak Ditemukan";
        }
    }

}
