<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function index() {
        $this->load->model('User_model', 'users');
        $data['list_users']=$this->users->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/index', $data);
        $this->load->view('layout/footer');
    }
    public function view(){
        $id = $this->input->get('id');
        $this->load->model('User_model','users');
        $data['users']=$this->users->findById($id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['judul'] = 'Form Kelola Data Suplier';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/create', $data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('User_model', 'users');

        $_id = $this->input->post('id');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_created_at = $this->input->post('created_at');
        $_last_login = $this->input->post('last_login');
        $_status = $this->input->post('status');
        $_role = $this->input->post('role');
        $users_edit = $this->input->post('users_edit'); //hidden field kalau form nya update

        // membuat array yang nantinya akan di masukkan ke dalam $data_mhs.
        $data_users[] = $_id; // ? 1
        $data_users[] = $_username; // ? 1
        $data_users[] = $_password; // ? 1
        $data_users[] = $_email; // ? 1
        $data_users[] = $_created_at; // ? 1
        $data_users[] = $_last_login; // ? 1
        $data_users[] = $_status; // ? 1
        $data_users[] = $_role; // ? 1

        if (isset($users_edit)){
            //update data lama
            $data_users[] = $users_edit; //? 8
            $this->users->update($data_users);
        }else{
            //save data baru
            // untuk memanggil fungsi save di model
            $this->users->save($data_users);
        }
        
        redirect(base_url(). 'index.php/users/view?id='. $_id , 'refresh');
        //redirect digunakan untuk membelokkan halaman, base_url dari redirect ini ada dari confignya, 

        //die(print r($this->mhs1));

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model('User_model', 'users');
        $users_edit = $this->users->findById($_id);

        $data['judul']='Form Update Data Users';
        $data['users_edit'] = $users_edit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $id = $this->input->get('id');
        $this->load->model('User_model', 'users');
        $this->users->delete($id);
        redirect(base_url(). 'index.php/users', 'refresh');
    }
}
?>