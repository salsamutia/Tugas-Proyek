<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produk extends CI_Controller {
    public function index() {
        $_id = $this->input->get('id');
        $this->load->model('produk_model', 'produk');
        $data['list_produk']=$this->produk->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('produk/index', $data);
        $this->load->view('layout/footer');
    }
    public function view(){
        $id = $this->input->get('id');
        $this->load->model('produk_model','produk');
        $data['produk']=$this->produk->findById($id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('produk/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['judul'] = 'Form Kelola Data Pesanan';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('produk/create', $data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('produk_model', 'produk');

        $_id = $this->input->post('id');
        $_kode = $this->input->post('kode');
        $_nama = $this->input->post('nama');
        $_stok = $this->input->post('stok');
        $_harga_beli = $this->input->post('harga_beli');
        $_harga_jual = $this->input->post('harga_jual');
        $_jenis_id = $this->input->post('jenis_id');
        $_deskripsi = $this->input->post('deskripsi');
        $pesanan_edit = $this->input->post('produk_edit'); //hidden field kalau form nya update

        // membuat array yang nantinya akan di masukkan ke dalam $data_produk.
        $data_produk[] = $_id; // ? 1
        $data_produk[] = $_kode; // ? 2
        $data_produk[] = $_nama; // ? 3
        $data_produk[] = $_stok; // ? 4
        $data_produk[] = $_harga_beli; // ? 5
        $data_produk[] = $_harga_jual; // ? 6
        $data_produk[] = $_jenis_id; // ? 7
        $data_produk[] = $_deskripsi; // ? 8

        if (isset($produk_edit)){
            //update data lama
            $data_produk[] = $produk_edit; //? 8
            $this->produk->update($data_produk);
        }else{
            //save data baru
            // untuk memanggil fungsi save di model
            $this->produk->save($data_produk);
        }
        
        redirect(base_url(). 'index.php/produk/view?id='. $_id , 'refresh');
        //redirect digunakan untuk membelokkan halaman, base_url dari redirect ini ada dari confignya, 

        //die(print r($this->mhs1));

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model('produk_model', 'produk');
        $produk_edit = $this->produk->findById($_id);

        $data['judul']='Form Update Data Produk';
        $data['produk_edit'] = $produk_edit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('produk/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $id = $this->input->get('id');
        $this->load->model('produk_model', 'produk');
        $this->produk->delete($id);
        redirect(base_url(). 'index.php/produk', 'refresh');
    }

    public function upload(){
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $id = $this->input->POST('id');

        $array = explode('.', $_FILES['fotoproduk']['name']);
        $extension = end($array);

        //die(print_r($_FILES));
        $new_name = $id. '.' . $extension;
        //die(print_r($new_name));

        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('fotoproduk')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        }
        else
        {
            //panggil model
            $this->load->model('produk_model', 'produk');
            $array_data[] = $new_name; //? ke 1
            $array_data[] = $id; //? ke 2

            //update foto di tabel mahasiswa
            $this->produk->update_foto($array_data);
            

            $data = array('upload_data' => $this->upload->data());
            //$this->load->view('upload_success', $data);
        }
        
        redirect(base_url(). 'index.php/produk/view?id='. $id);
        
    }


}
?>