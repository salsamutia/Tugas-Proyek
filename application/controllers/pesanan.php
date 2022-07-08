<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesanan extends CI_Controller {
    public function index() {
        $this->load->model('pesanan_model', 'pesanan');
        $data['list_pesanan']=$this->pesanan->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pesanan/index', $data);
        $this->load->view('layout/footer');
    }
    public function view(){
        $id = $this->input->get('id');
        $this->load->model('pesanan_model','pesanan');
        $data['pesanan']=$this->pesanan->findById($id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pesanan/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['judul'] = 'Form Kelola Data Pesanan';

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pesanan/create', $data);
        
    }

    public function save(){
        $this->load->model('pesanan_model', 'pesanan');

        $_id = $this->input->post('id');
        $_tanggal = $this->input->post('tanggal');
        $_jumlah = $this->input->post('jumlah');
        $_users_id = $this->input->post('users_id');
        $_produk_id = $this->input->post('produk_id');
        $pesanan_edit = $this->input->post('pesanan_edit'); //hidden field kalau form nya update

        // membuat array yang nantinya akan di masukkan ke dalam $data_mhs.
        $data_pesanan[] = $_id; // ? 1
        $data_pesanan[] = $_tanggal; // ? 2
        $data_pesanan[] = $_jumlah; // ? 3
        $data_pesanan[] = $_users_id; // ? 4
        $data_pesanan[] = $_produk_id; // ? 5

        if (isset($pesanan_edit)){
            //update data lama
            $data_pesanan[] = $pesanan_edit; //? 8
            $this->pesanan->update($data_pesanan);
        }else{
            //save data baru
            // untuk memanggil fungsi save di model
            $this->pesanan->save($data_pesanan);
        }
        
        redirect(base_url(). 'index.php/pesanan/view?id='. $_id , 'refresh');
        //redirect digunakan untuk membelokkan halaman, base_url dari redirect ini ada dari confignya, 

        //die(print r($this->mhs1));

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model('pesanan_model', 'pesanan');
        $pesanan_edit = $this->pesanan->findById($_id);

        $data['judul']='Form Update Data Pesanan';
        $data['pesanan_edit'] = $pesanan_edit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pesanan/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $id = $this->input->get('id');
        $this->load->model('pesanan_model', 'pesanan');
        $this->pesanan->delete($id);
        redirect(base_url(). 'index.php/pesanan', 'refresh');
    }
}
?>