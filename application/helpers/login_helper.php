<?php

function cek_login() {
    $ci = & get_instance();
    if (!$ci->session->userdata('berhasil_login')) {
        $ci->session->set_flashdata('pesan_error', 'Anda Harus Login !!!');
        redirect(base_url('login'));
    }
}

function cek_hakakses($akses = array()) {
    $ci = & get_instance();
    if (!in_array($ci->session->userdata('id_hak_akses'), $akses)) {
        $ci->session->set_flashdata('pesan_error', 'Anda Tidak Boleh Mengakses Modul ini');
         redirect(base_url('dashboard'));
    }
}
