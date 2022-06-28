<?php

class parente{
    private $id;
    private $name;
    
    private $dateNaissance;
    private $numeroTel;
    private $id_users;
    public function __construct($name, $dateNaissance, $numeroTel,$id_users)
    {
        $this->name = $name;
        $this->dateNaissance = $dateNaissance;
        $this->numeroTel = $numeroTel;
        $this->id_users=$id_users;

        
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
    
    

 
    
}

?>

