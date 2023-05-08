<?php


class DasborController extends Controller
{
    public function index()
    {
        $barang_model = $this->loadModel('BarangModel');
        $data_barang = $barang_model->Barangdasbor();
        
        $totalHargaBeli = 0;
        $totalbeli = 0;
        $pembelian_model = $this->loadModel('PembelianModel');
        $pembelian = $pembelian_model->getAllPembelian();
        foreach ($pembelian as $pembelian_item) {
            $totalHargaBeli += $pembelian_item->HargaBeli * $pembelian_item->JumlahPembelian;
        }
        
        $totalHargaJual = 0;
        $totaljual = 0;
        $penjualan_model = $this->loadModel('PenjualanModel');
        $penjualan = $penjualan_model->getAllPenjualan();
        foreach ($penjualan as $penjualan_item) {
            $totalHargaJual += $penjualan_item->HargaJual * $penjualan_item->JumlahPenjualan;
        }

        $labaRugi = $totalHargaJual - $totalHargaBeli;
       
        $data['total_harga_beli'] = $totalHargaBeli;
        $data['total_harga_jual'] = $totalHargaJual;
        $data['laba_rugi'] = $labaRugi;


        $menu = 'dasbor';
        require 'app/views/layouts/header.php';
        require 'app/views/layouts/navbar.php';
        require 'app/views/dasbor/index.php';
        require 'app/views/layouts/footer.php';
    }
}