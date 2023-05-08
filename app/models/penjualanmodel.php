<?php

class PenjualanModel
{
    
    private $IdPenjualan = NULL;
    private $JumlahPenjualan;
    private $HargaJual;
    private $iduser = NULL;
    private $IdBarang = NULL;
    /* Properties */
    private $db;
    /* Get database access */
    public function __construct($db) {
        $this->db = $db;
    }
    function setIdPenjualan ($IdPenjualan)
    {
        $this->IdPenjualan = $IdPenjualan;
    }
    function setJumlahPenjualan ($JumlahPenjualan)
    {
        $this->JumlahPenjualan = $JumlahPenjualan;
    }
    function setHargaJual ($HargaJual)
    {
        $this->HargaJual = $HargaJual;
    }
    function setiduser ($iduser)
    {
        $this->iduser = $iduser;
    }
    function setIdBarang ($IdBarang)
    {
        $this->IdBarang = $IdBarang;
    }
    function getIdPenjualan ()
    {
        return $this->IdPenjualan;
    }
    function getJumlahPenjualan ()
    {
        return $this->JumlahPenjualan;
    }
    function getHargaJual ()
    {
        return $this->HargaJual;
    }
    function getiduser ()
    {
        return $this->iduser;
    }
    function getIdBarang ()
    {
        return $this->IdBarang;
    }

    //get penjualan
    public function getAllPenjualan()
    {
        try {
            $query = "SELECT * FROM penjualan";
            $prepareDB = $this->db->prepare($query);
            $prepareDB->execute();
            $result = $prepareDB->fetchAll();
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }
    }
    ?>