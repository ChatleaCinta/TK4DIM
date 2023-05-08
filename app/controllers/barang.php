<?php

class Barang extends Controller
{
    public function index()
    {
        $menu = 'barang';
        
        $status = isset($_GET['status']) ? $_GET['status'] : null;
        $action = isset($_GET['action']) ? $_GET['action'] : null;
        $NamaBarang = isset($_GET['NamaBarang']) ? $_GET['NamaBarang'] : null;

        $barang_model = $this->loadModel('BarangModel');
        $data_barang = $barang_model->getAllBarang($NamaBarang);
        
        require 'app/views/layouts/header.php';
        require 'app/views/layouts/navbar.php';
        require 'app/views/barang/index.php';
        require 'app/views/layouts/footer.php';
    }

    public function tambah()
    {
        $pengguna_model = $this->loadModel('PenggunaModel');
        $data_pengguna = $pengguna_model->getAllPengguna();

        require 'app/views/layouts/header.php';
        require 'app/views/layouts/navbar.php';
        require 'app/views/barang/add.php';
        require 'app/views/layouts/footer.php';
    }

    public function proses_tambah()
    {
        try {
            if (isset($_POST["tambah_barang"])) {
                $barang_model = $this->loadModel('BarangModel');
                $barang_model->setiduser($_POST["iduser"]);
                $barang_model->setNamaBarang($_POST["NamaBarang"]);
                $barang_model->setKeterangan($_POST["Keterangan"]);
                $barang_model->setSatuan($_POST["Satuan"]);
                $barang_model->saveBarang();
            }

            header('location: ' . URL . '/barang?status=success&action=add');
        } catch (Exception $e) {
            header('location: ' . URL . '/barang?status=error&action=edit');
        }
    }

    public function proses_hapus()
    {
        try {
            if (isset($_POST["hapus_barang"])) {
                $barang_model = $this->loadModel('barangmodel');
                $barang_model->setIdBarang($_POST["IdBarang"]);
                $barang_model->deleteBarang();
            }

            header('location: ' . URL . '/barang?status=success&action=delete');
        } catch (Exception $e) {
            header('location: ' . URL . '/barang?status=error&action=edit');
        }
    }

    public function edit($id)
    {
        $pengguna_model = $this->loadModel('PenggunaModel');
        $data_pengguna = $pengguna_model->getAllPengguna();

        $barang_model = $this->loadModel('BarangModel');
        $barang_model->setIdBarang($id);
        $data_barang = $barang_model->getBarangById();

        require 'app/views/layouts/header.php';
        require 'app/views/layouts/navbar.php';
        require 'app/views/barang/edit.php';
        require 'app/views/layouts/footer.php';
    }

    public function proses_edit()
    {
        try {
            if (isset($_POST["edit_barang"])) {
                $barang_model = $this->loadModel('BarangModel');
                $barang_model->setIdBarang($_POST["IdBarang"]);
                $barang_model->setiduser($_POST["iduser"]);
                $barang_model->setNamaBarang($_POST["NamaBarang"]);
                $barang_model->setKeterangan($_POST["Keterangan"]);
                $barang_model->setSatuan($_POST["Satuan"]);
                $barang_model->editBarang();
            }
    
            header('location: ' . URL . '/barang?status=success&action=edit');
        } catch (Exception $e) {
            header('location: ' . URL . '/barang?status=error&action=edit');
        }
    }

    public function detail($id)
    {
        $pengguna_model = $this->loadModel('PenggunaModel');
        $data_pengguna = $pengguna_model->getAllPengguna();

        $barang_model = $this->loadModel('BarangModel');
        $barang_model->setIdBarang($id);
        $data_barang = $barang_model->getBarangById();

        require 'app/views/layouts/header.php';
        require 'app/views/layouts/navbar.php';
        require 'app/views/barang/detail.php';
        require 'app/views/layouts/footer.php';
    }
}