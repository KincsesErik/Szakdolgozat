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

    public function checkLogin($username, $password){
        $sql = "SELECT * FROM felhasznalo WHERE felhasznalonev = '".$_POST['uname']."'";
        if($result = $this->db->dbselect($sql)){
            if($row = $result->fetch_assoc()){
                if($row['felhasznalonev'] == $uname){
                    if($row['jelszo'] == md5($password)){
                        $loginResult = 2 ;//successful login
                        $_SESSION["felhasznalonev"] = $row['felhasznalonev'];
                        $_SESSION["id"] = $row['id'];
                    }
                    else{
                        $loginResult = 1 ;//incorrect password
                    }
                }
                else{
                    echo "Rossz felhasznalonév.";
                }
            }
        }
        else{
            $loginResult = 0; //incorrect username
        }
        return $loginResult;
    }
    
    public function registerUser($uname, $password, $name){
        $sql = "INSERT INTO user (id, felhasznalonev, jelszo, nev) VALUES (NULL,'$uname','".md5($password)."','$name')";
        $result = $this->db->dbinsert($sql);
    }
}
