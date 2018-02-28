<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Peserta extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        cek_login();
    }

    function index() {
        $data['konten'] = 'peserta/input_peserta';
        $this->load->view('dashboard/dashboard', $data);
    }

}
