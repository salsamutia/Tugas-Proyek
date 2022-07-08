<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pembelian extends CI_Controller {
    public function index() {
        $this->load->model('pembelian_model', 'pembelian');
        $data['list_pembelian']=$this->pembelian->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pembelian/index', $data);
        $this->load->view('layout/footer');
    }
    public function view(){
        $id = $this->input->get('id');
        $this->load->model('pembelian_model','pembelian');
        $data['pembelian']=$this->pembelian->findById($id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pembelian/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['judul'] = 'Form Kelola Data Pembelian Produk';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pembelian/create', $data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('pembelian_model', 'pembelian');

        $_id = $this->input->post('id');
        $_tanggal = $this->input->post('tanggal');
        $_jumlah = $this->input->post('jumlah');
        $_harga = $this->input->post('harga');
        $_produk_id = $this->input->post('produk_id');
        $_suplier_id = $this->input->post('suplier_id');
        $pembelian_edit = $this->input->post('pembelian_edit'); //hidden field kalau form nya update

        // membuat array yang nantinya akan di masukkan ke dalam $data_mhs.
        $data_pembelian[] = $_id; // ? 1
        $data_pembelian[] = $_tanggal; // ? 2
        $data_pembelian[] = $_jumlah; // ? 3
        $data_pembelian[] = $_harga; // ? 4
        $data_pembelian[] = $_produk_id; // ? 5
        $data_pembelian[] = $_suplier_id; // ? 6

        if (isset($pembelian_edit)){
            //update data lama
            $data_pembelian[] = $pembelian_edit; //? 8
            $this->pembelian->update($data_pembelian);
        }else{
            //save data baru
            // untuk memanggil fungsi save di model
            $this->pembelian->save($data_pembelian);
        }
        
        redirect(base_url(). 'index.php/pembelian/view?id='. $_id , 'refresh');
        //redirect digunakan untuk membelokkan halaman, base_url dari redirect ini ada dari confignya, 

        //die(print r($this->mhs1));

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model('pembelian_model', 'pembelian');
        $pembelian_edit = $this->pembelian->findById($_id);

        $data['judul']='Form Update Data Pembelian Produk';
        $data['pembelian_edit'] = $pembelian_edit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('pembelian/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $id = $this->input->get('id');
        $this->load->model('pembelian_model', 'pembelian');
        $this->jenis_produk->delete($id);
        redirect(base_url(). 'index.php/pembelian', 'refresh');
    }
}
?>