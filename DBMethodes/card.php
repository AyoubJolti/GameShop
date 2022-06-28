<?php
class card{

    private $id;
    private $id_art;
    private $id_user;

    function __construct($id,$id_art,$id_user){
        $this->id=$id;
        $this->id_art=$id_art;
        $this->id_user=$id_user;

    }
    public function getid(){
        return $this->id;
    }
    public function setid($id){
     $this->id=$id;
    }
    public function getid_art(){
        return $this->id;
    }
    public function setid_art($id_art){
     $this->id_art=$id_art;
    }
    public function getid_user(){
        return $this->id;
    }
    public function setid_user($id_user){
     $this->id_user=$id_user;
    }
}


?>