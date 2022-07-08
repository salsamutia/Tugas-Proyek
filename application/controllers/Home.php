<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index(){
        $this->load->model('produk_model','produk');
        $this->load->model('pesanan_model','pesanan');
        $this->load->model('user_model','user');
        $list_produk= $this->produk->getAll();
        $list_pesanan= $this->pesanan->getAll();
        $data['list_produk'] = $list_produk;
        $data['list_pesanan'] = $list_pesanan;
        $this->load->view('home/index', $data);
    }

    public function pesanan(){
        $this->load->model('produk_model', 'produk');
        $_id = $this->input->get('id');
        $data['produk'] = $this->produk->findById($_id);

        $this->load->view('home/pesanan', $data);
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
        
        $this->pesanan->save($data_pesanan);
        $row = $this->pesanan->lastId();
        $_id = $row -> id;
        redirect(base_url(). 'index.php/pesanan/view?id='. $_id , 'refresh');
        //redirect digunakan untuk membelokkan halaman, base_url dari redirect ini ada dari confignya, 

        //die(print r($this->mhs1));
 

    }
}