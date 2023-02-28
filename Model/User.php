<?php

require_once 'db_inc.php';

class Felhasznalo{

    private $id;
    private $felhasznalonev;
    private $jelszo;
    private $nev;
    private $db;

    function __construct($db){
        $this->db=$db;
    }

    
    public function registerUser($uname, $name, $password){
        $sql = "INSERT INTO user (id, felhasznalonev, jelszo, nev) VALUES (NULL,'$uname','".md5($password)."','$name',1)";
        $result = $this->db->dbinsert($sql);
    }
}

