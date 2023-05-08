<?php

class PembelianModel
{
    
    private $IdPembelian = NULL;
    private $JumlahPembelian;
    private $HargaBeli;
    private $iduser = NULL;
    private $IdBarang = NULL;
    /* Properties */
    private $db;
    /* Get database access */
    public function __construct($db) {
        $this->db = $db;
    }
    function setIdPembelian ($IdPembelian)
    {
        $this->IdPembelian = $IdPembelian;
    }
    function setJumlahPembelian ($JumlahPembelian)
    {
        $this->JumlahPembelian = $JumlahPembelian;
    }
    function setHargaBeli ($HargaBeli)
    {
        $this->HargaBeli = $HargaBeli;
    }
    function setiduser ($iduser)
    {
        $this->iduser = $iduser;
    }
    function setIdBarang ($IdBarang)
    {
        $this->IdBarang = $IdBarang;
    }
    function getIdPembelian ()
    {
        return $this->IdPembelian;
    }
    function getJumlahPembelian ()
    {
        return $this->JumlahPembelian;
    }
    function getHargaBeli ()
    {
        return $this->HargaBeli;
    }
    function getiduser ()
    {
        return $this->iduser;
    }
    function getIdBarang ()
    {
        return $this->IdBarang;
    }

    //get pembelian
    public function getAllPembelian()
    {
        try {
            $query = "SELECT * FROM pembelian";
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