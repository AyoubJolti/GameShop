<?php

class enfant{
    private $id;
    private $name;
    private $mail;
    private $password;
    private $dateNaissance;
    private $numeroTel;
    private $id_parent;
    public function __construct($name, $mail, $password, $dateNaissance, $numeroTel, $id_parent)
    {
        $this->name = $name;
        $this->mail = $mail;
        $this->password = $password;
        $this->dateNaissance = $dateNaissance;
        $this->numeroTel = $numeroTel;
        $this->id_parent = $id_parent;
    }
    public function getname()
    {
        return $this->name;
    }
    public function getpassword()
    {
        return $this->password;
    }
    public function getdateNaissance()
    {
        return $this->dateNaissance;
    }
    public function getnumeroTel()
    {
        return $this->numeroTel;
    }
    public function getmail()
    {
        return $this->mail;
    }
    public function getid_parent()
    {
        return $this->id_parent;
    }

    public function setname($name)
    {
        $this->name = $name;
    }
    public function setmail($mail)
    {
        $this->name = $mail;
    }
    public function setpassword($password)
    {
        $this->name = $password;
    }
    public function setdateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }
    public function setnumeroTel($numeroTel)
    {
        $this->numeroTel = $numeroTel;
    }
    public function setid_parent($id_parent)
    {
        $this->id_parent = $id_parent;
    }
    
}



?>
