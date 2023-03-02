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
    
    public function checkLogin($uname, $password) {
        $sql = "SELECT * FROM felhasznalo WHERE felhasznalonev = '".$uname."'";
        // van ilyen felhasználó?    
        if($result = $this->db->dbSelect($sql)) {
            if($row = $result->fetch_assoc()) {
                if($row['jelszo'] == md5($password)) {
                    $eredmeny = 2; // Sikeres belépés
                    $_SESSION["nev"] = $row['nev'];
                    $_SESSION["id"] = $row['id'];
                }
                else {
                    $eredmeny = 1; // Sikertelen belépés: hibás jelszó!
                }
            }
        }
        else {
            $eredmeny = 0; // Nincs ilyen felhasználónév
        }
        return $eredmeny;
    }

    public function registerUser($name, $uname, $password){
        $sql = "INSERT INTO felhasznalo (id, felhasznalonev, jelszo, nev) VALUES (NULL,'$uname','".md5($password)."','$name')";
        $result = $this->db->dbinsert($sql);
    }
}

