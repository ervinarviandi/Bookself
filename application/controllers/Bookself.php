<?php

class Bookself extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('BookselfModel');
    }

    public function index()
    {
        $data['penerbit_buku'] = $this->BookselfModel->getAll();
        // var_dump($data);
        $this->load->view('blog/v_tampil', $data);
    }

    public function tambah()
    {
        $this->load->view('blog/v_tambah');
    }


    public function proses_tambah()
    {
       $judul_buku = $this->input->post('txtjudul_buku');
       $penerbit_buku = $this->input->post('txtpenerbit_buku');
       $jenis_buku = $this->input->post('txtjenis_buku');
       $kategori_buku = $this->input->post('txtkategori_buku');
       $harga_buku = $this->input->post('txtharga_buku');


       $data_input = [
         'judul_buku' => $judul_buku,
         'penerbit_buku' => $penerbit_buku,
         'jenis_buku' => $jenis_buku,
         'kategori_buku' => $kategori_buku,
         'harga_buku' => $harga_buku
       ];

       $simpan = $this->BookselfModel->add($data_input);
       redirect('Bookself/index');



      //  var_dump ($data_input);
    }


    public function hapus($id)
    {
      $this->BookselfModel->delete($id);
      redirect('Bookself/index');
    }


    public function edit($id)
    {
      $data['penerbit_buku'] = $this->BookselfModel->getOne($id);
      return $this->load->view('blog/v_edit', $data);
    }



    public function proses_edit()
    {
      $id = $this->input->post('txtid');
      $judul_buku = $this->input->post('txtjudul_buku');
      $penerbit_buku = $this->input->post('txtpenerbit_buku');
      $jenis_buku = $this->input->post('txtjenis_buku');
      $kategori_buku = $this->input->post('txtkategori_buku');
      $harga_buku = $this->input->post('txtharga_buku');


      $data_edit = [
        'judul_buku' => $judul_buku,
        'penerbit_buku' => $penerbit_buku,
        'jenis_buku' => $jenis_buku,
        'kategori_buku' => $kategori_buku,
        'harga_buku' => $harga_buku
      ];

       $this->BookselfModel->editData($id, $data_edit);
      redirect('Bookself/index');

    }
}