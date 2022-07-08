<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jenis_produk extends CI_Controller {
    public function index() {
        $this->load->model('jenis_produk_model', 'jenis_produk');
        $data['list_jenis_produk']=$this->jenis_produk->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_produk/index', $data);
        $this->load->view('layout/footer');
    }
    public function view(){
        $id = $this->input->get('id');
        $this->load->model('jenis_produk_model','jenis_produk');
        $data['jenis_produk']=$this->jenis_produk->findById($id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_produk/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['judul'] = 'Form Kelola Data Jenis Produk';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_produk/create', $data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('jenis_produk_model', 'jenis_produk');

        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $jenis_produk_edit = $this->input->post('jenis_produk_edit'); //hidden field kalau form nya update

        // membuat array yang nantinya akan di masukkan ke dalam $data_mhs.
        $data_jenis_produk[] = $_id; // ? 1
        $data_jenis_produk[] = $_nama; // ? 2

        if (isset($jenis_produk_edit)){
            //update data lama
            $data_jenis_produk[] = $jenis_produk_edit; //? 8
            $this->jenis_produk->update($data_jenis_produk);
        }else{
            //save data baru
            // untuk memanggil fungsi save di model
            $this->jenis_produk->save($data_jenis_produk);
        }
        
        redirect(base_url(). 'index.php/jenis_produk/view?id='. $_id , 'refresh');
        //redirect digunakan untuk membelokkan halaman, base_url dari redirect ini ada dari confignya, 

        //die(print r($this->mhs1));

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model('jenis_produk_model', 'jenis_produk');
        $jenis_produk_edit = $this->jenis_produk->findById($_id);

        $data['judul']='Form Update Data Jenis Produk';
        $data['jenis_produk_edit'] = $jenis_produk_edit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_produk/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $id = $this->input->get('id');
        $this->load->model('jenis_produk_model', 'jenis_produk');
        $this->jenis_produk->delete($id);
        redirect(base_url(). 'index.php/jenis_produk', 'refresh');
    }
}
?>