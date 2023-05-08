<?php

class PenggunaModel
{
    
    private $iduser = NULL;
    private $username;
    private $password;
    private $namalengkap;
    private $NoHp;
    private $Alamat;
    private $IdAkses = NULL;
    /* Properties */
    private $db;
    /* Get database access */
    public function __construct($db) {
        $this->db = $db;
    }
    function setIduser ($iduser)
    {
        $this->iduser = $iduser;
    }
    function setUsername ($username)
    {
        $this->username = $username;
    }
    function setPassword ($password)
    {
        $this->password = $password;
    }
    function setNamalengkap ($namalengkap)
    {
        $this->namalengkap = $namalengkap;
    }
    function setNoHp ($NoHp)
    {
        $this->NoHp = $NoHp;
    }
    function setAlamat ($Alamat)
    {
        $this->Alamat = $Alamat;
    }
    function setIdAkses ($IdAkses)
    {
        $this->IdAkses = $IdAkses;
    }
    function getIduser ()
    {
        return $this->iduser;
    }
    function getUsername ()
    {
        return $this->username;
    }
    function getPassword ()
    {
        return $this->password;
    }
    function getNamalengkap ()
    {
        return $this->namalengkap;
    }
    function getNoHp ()
    {
        return $this->NoHp;
    }
    function getAlamat ()
    {
        return $this->Alamat;
    }
    function getIdAkses ()
    {
        return $this->IdAkses;
    }

    //get pengguna
    public function getAllPengguna()
    {
        try {
            $query = "SELECT * FROM pengguna";
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