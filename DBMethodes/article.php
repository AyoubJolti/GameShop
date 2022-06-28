<?php
class articlee{
private $id;
private $titre;
private $decs;
private $vendeur_id;
private $realisateur;
private $limate_age;
private $prix;
private $image_url;
function __construct($titre,$decs,$vendeur_id,$realisateur,$limate_age,$prix,$image_url)
{
    $this->titre=$titre;
    $this->decs=$decs;
    $this->vendeur_id=$vendeur_id;
    $this->realisateur=$realisateur;
    $this->limate_age=$limate_age;
    $this->prix=$prix;
    $this->image_url=$image_url;
    
}
public function gettitre(){
    return $this->titre;
}
public function getdecs(){
    return $this->decs;
}
public function getvendeur_id(){
    return $this->vendeur_id;
}
public function getrealisateur(){
    return $this->realisateur;
}
public function getlimate_age(){
    return $this->limate_age;
}
public function getprix(){
    return $this->prix;
}
public function getimage_url(){
    return $this->image_url;
}




public function settitre($titre){
     $this->titre=$titre;
}
public function setdecs($decs){
     $this->decs=$decs;
}
public function setvendeur_id($vendeur_id){
     $this->vendeur_id=$vendeur_id;
}
public function setrealisateur($realisateur){
     $this->realisateur=$realisateur;
}
public function setlimate_age($limate_age){
     $this->limate_age=$limate_age;
}
public function setprix($prix){
     $this->prix=$prix;
}
public function setimage_url($image_url){
     $this->image_url=$image_url;
}


}

?>