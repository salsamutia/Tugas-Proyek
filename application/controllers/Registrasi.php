<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

    public function index(){
        $this->load->view('registrasi');
    }

    public function save(){
        $this->load->model('user_model', 'users');

        $_username = $this->input->post('username');
        $_password1 = $this->input->post('password1');
        $_password2 = $this->input->post('password2');
        $_email = $this->input->post('email');

        $data_user[] = $_username;
        $data_user[] = $_password1;
        $data_user[] = $_email;

        $this->users->registrasi($data_user);
        redirect(base_url() . 'index.php/login');

    }
}
?>