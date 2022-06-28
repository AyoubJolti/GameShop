<?php
class user
{
    private $id;
    private $login;
   
    private $passworde;
    private $type;
    private $numeroTel;
    private $CarteIdrntite;
    public function __construct($id, $login, $passworde, $type)
    {
        $this->id = $id;
        $this->mail = $login;
        $this->password = $passworde;
        $this->dateNaissance = $type;
       
    }
    public function getid()
    {
        return $this->id;
    }
    public function getpassworde()
    {
        return $this->passworde;
    }
    
    public function getlogin()
    {
        return $this->login;
    }
    public function gettype()
    {
        return $this->type;
    }

    public function setid($id)
    {
        $this->id = $id;
    }
    public function setlogin($login)
    {
        $this->login = $login;
    }
    public function setpassworde($passworde)
    {
        $this->passworde = $passworde;
    }
    public function settype($type)
    {
        $this->type = $type;
    }

}

?>