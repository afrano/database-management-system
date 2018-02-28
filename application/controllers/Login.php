<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        if ($this->session->userdata('berhasil_login')) {
            redirect(base_url() . 'dashboard');
        } else {
            $this->load->view('login/login');
        }
    }

    function cek_login() {
        $this->form_validation->set_rules('email', 'Input Username', 'valid_email|required|min_length[5]');
        $this->form_validation->set_rules('password', 'Input Password', 'required|min_length[3]');

        if ($this->form_validation->run()) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $query = $this->db->get_where('login', array('email' => $email,
                'password' => md5($password), 'status' => 1)
            );
            if ($query->num_rows() == 1) {
                $row = $query->row();
                $data_sesi = array(
                    'email' => $email, 'user_name' => $row->nama, 'id_hak_akses' => $row->id_hak_akses,
                    'berhasil_login' => true
                );
                $this->session->set_userdata($data_sesi);
                redirect(base_url() . 'dashboard');
            } else {
                $this->session->set_flashdata('pesan_error', 'Gagal Login Username/Password salah !!!');
                redirect('login');
            }
        } else {
            $this->load->view('login/login');
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url() . 'Login');
    }

}
