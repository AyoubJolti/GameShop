<?php
class vendeur
{
    private $id;
    private $name;
    
    private $dateNaissance;
    private $numeroTel;
    private $CarteIdrntite;
    private $id_users;
    public function __construct($name,$dateNaissance, $numeroTel, $CarteIdrntite,$id_users)
    {
        $this->name = $name;
        $this->id_users=$id_users;
        $this->dateNaissance = $dateNaissance;
        $this->numeroTel = $numeroTel;
        $this->CarteIdrntite = $CarteIdrntite;
    }
    public function getname()
    {
        return $this->name;
    }
    public function getid_users()
    {
        return $this->id_users;
    }
    
    
    public function getdateNaissance()
    {
        return $this->dateNaissance;
    }
    public function getnumeroTel()
    {
        return $this->numeroTel;
    }
    
    public function getCarteIdrntite()
    {
        return $this->CarteIdrntite;
    }

    public function setname($name)
    {
        $this->name = $name;
    }
    
    
    public function setdateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }
    public function setnumeroTel($numeroTel)
    {
        $this->numeroTel = $numeroTel;
    }
    public function setCarteIdrntite($CarteIdrntite)
    {
        $this->CarteIdrntite = $CarteIdrntite;
    }
}

?>