<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class suplier extends CI_Controller {
    public function index() {
        $this->load->model('suplier_model', 'suplier');
        $data['list_suplier']=$this->suplier->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('suplier/index', $data);
        $this->load->view('layout/footer');
    }
    public function view(){
        $id = $this->input->get('id');
        $this->load->model('suplier_model','suplier');
        $data['suplier']=$this->suplier->findById($id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('suplier/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['judul'] = 'Form Kelola Data Suplier';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('suplier/create', $data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('suplier_model', 'suplier');

        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_kota = $this->input->post('kota');
        $_kontak = $this->input->post('kontak');
        $_alamat = $this->input->post('alamat');
        $_telpon = $this->input->post('telpon');
        $suplier_edit = $this->input->post('suplier_edit'); //hidden field kalau form nya update

        // membuat array yang nantinya akan di masukkan ke dalam $data_mhs.
        $data_suplier[] = $_id; // ? 1
        $data_suplier[] = $_nama; // ? 2
        $data_suplier[] = $_kota; // ? 3
        $data_suplier[] = $_kontak; // ? 4
        $data_suplier[] = $_alamat; // ? 5
        $data_suplier[] = $_telpon; // ? 6

        if (isset($suplier_edit)){
            //update data lama
            $data_suplier[] = $suplier_edit; //? 8
            $this->suplier->update($data_suplier);
        }else{
            //save data baru
            // untuk memanggil fungsi save di model
            $this->suplier->save($data_suplier);
        }
        
        redirect(base_url(). 'index.php/suplier/view?id='. $_id , 'refresh');
        //redirect digunakan untuk membelokkan halaman, base_url dari redirect ini ada dari confignya, 

        //die(print r($this->mhs1));

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model('suplier_model', 'suplier');
        $suplier_edit = $this->suplier->findById($_id);

        $data['judul']='Form Update Data Suplier';
        $data['suplier_edit'] = $suplier_edit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('suplier/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $id = $this->input->get('id');
        $this->load->model('suplier_model', 'suplier');
        $this->suplier->delete($id);
        redirect(base_url(). 'index.php/suplier', 'refresh');
    }
}
?>