<?php

class BarangModel
{
    /* Properties */
    private $IdBarang = null;
    private $iduser = null;
    private $NamaBarang;
    private $Keterangan;
    private $Satuan;
    private $db;

    function __construct($db) {
        $this->db = $db;
    }

    function setIdBarang($IdBarang) 
    {
        $this->IdBarang = $IdBarang;
    }

    function setiduser($iduser) 
    {
        $this->iduser = $iduser;
    }

    function setNamaBarang($NamaBarang)
    {
        $this->NamaBarang = $NamaBarang;
    }

    function setKeterangan($Keterangan)
    {
        $this->Keterangan = $Keterangan;
    }

    function setSatuan($Satuan)
    {
        $this->Satuan = $Satuan;
    }

    function getIdBarang()
    {
        return $this->IdBarang;
    }

    function getiduser()
    {
        return $this->iduser;
    }
    function getNamaBarang()
    {
        return $this->NamaBarang;
    }

    function getKeterangan()
    {
        return $this->Keterangan;
    }

    function getSatuan()
    {
        return $this->Satuan;
    }

    public function getAllBarang($NamaBarang)
    {
        try {
            
            if ($NamaBarang != null) {
                $query = "SELECT * FROM Barang INNER JOIN Pengguna ON Barang.iduser = Pengguna.iduser WHERE NamaBarang LIKE '%$NamaBarang%'";
            } else {
                $query = "SELECT * FROM Barang INNER JOIN Pengguna ON Barang.iduser = Pengguna.iduser";
            }

            
            $prepareDB = $this->db->prepare($query);
            $prepareDB->execute();
            $result = $prepareDB->fetchAll();
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function saveBarang()
    {
        try {
            $query = "INSERT INTO Barang (iduser, NamaBarang, Keterangan, Satuan) VALUES (:iduser, :NamaBarang, :Keterangan, :Satuan)";
            $prepareDB = $this->db->prepare($query);
            $prepareDB->bindParam(':iduser', $this->iduser);
            $prepareDB->bindParam(':NamaBarang', $this->NamaBarang);
            $prepareDB->bindParam(':Keterangan', $this->Keterangan);
            $prepareDB->bindParam(':Satuan', $this->Satuan);
            $prepareDB->execute();
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function deleteBarang()
    {
        try {
            $query = "DELETE FROM barang WHERE IdBarang = :IdBarang";
            $prepareDB = $this->db->prepare($query);
            $prepareDB->bindParam(':IdBarang', $this->IdBarang);
            $prepareDB->execute();
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getBarangById()
    {
        try {
            $query = "SELECT * FROM Barang WHERE IdBarang = :IdBarang";
            $prepareDB = $this->db->prepare($query);
            $prepareDB->bindParam(':IdBarang', $this->IdBarang);
            $prepareDB->execute();
            $result = $prepareDB->fetch();
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function editBarang()
    {
        try {
            $query = "UPDATE Barang SET iduser = :iduser, NamaBarang = :NamaBarang, Keterangan = :Keterangan, Satuan = :Satuan WHERE IdBarang = :IdBarang";
            $prepareDB = $this->db->prepare($query);
            $prepareDB->bindParam(':iduser', $this->iduser);
            $prepareDB->bindParam(':NamaBarang', $this->NamaBarang);
            $prepareDB->bindParam(':Keterangan', $this->Keterangan);
            $prepareDB->bindParam(':Satuan', $this->Satuan);
            $prepareDB->bindParam(':IdBarang', $this->IdBarang);
            $prepareDB->execute();
        } catch (Exception $e) {
            throw $e;
        }
    }
}