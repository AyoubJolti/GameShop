<?php
session_start();
include_once "../DBMethodes/gestion_user.php";
include_once "../DBMethodes/gestion_parent.php";
include_once "../DBMethodes/gestion_vendeur.php";
include_once "../DBMethodes/vendeur.php";
include_once "../DBMethodes/parente.php";


if($_GET['opes']=='signin'){
    $result=gestion_user::GetUser($_POST['login'],$_POST['password']);
    $data=gestion_user::GetUser_info($_POST['login'],$_POST['password']);
    if($result>0){
        
        $_SESSION['genre']=true;
      
       while($row=$data->fetch()){
        $_SESSION['nombre']=$result;
           $_SESSION['type']=$row['type'];
           $_SESSION['iduser']=$row['id'];
           $_SESSION['mail']=$row['login'];
           echo $_SESSION['nombre'].$_SESSION['type'];
           
           
           
           
       }
       
    }


}
else if($_GET['opes']=='logout'){
$_SESSION['type']=null;
$_SESSION['iduser']=null;
$_SESSION['mail']=null;
}
else if($_GET['opes']=='signupVenduer'){
    $add_user=gestion_user::add_user($_POST['signup_email'],$_POST['signup_password'],$_POST['TypeUser']);
    $get_id=gestion_user::GetIdUser($_POST['signup_email'],$_POST['signup_password']);
    while($row=$get_id->fetch()){
           
        $id=$row['id'];
    }
     $v=new vendeur($_POST['signup_username'],$_POST['signup_date'],$_POST['signup_tel'],$_POST['signup_cin'],$id);
    $add_vendeur=gestion_vendeur::addVendeur($v);

           $_SESSION['type']=$_POST['TypeUser'];
           $_SESSION['iduser']=$id;
           $_SESSION['mail']=$_POST['signup_email'];
           echo true;   

}
else if($_GET['opes']=='signupParent'){
    $add_user=gestion_user::add_user($_POST['signup_email'],$_POST['signup_password'],$_POST['TypeUser']);
    $get_id=gestion_user::GetIdUser($_POST['signup_email'],$_POST['signup_password']);
    while($row=$get_id->fetch()){
           
        $id=$row['id'];
    }
     $p=new parente($_POST['signup_username'],$_POST['signup_date'],$_POST['signup_tel'],$id);
    //  $p=new parente('jsjjs','jsjjs','jsjjs',1);

     $add_parent=gestion_parent::addParent($p);

           $_SESSION['type']=$_POST['TypeUser'];
           $_SESSION['iduser']=$id;
           $_SESSION['mail']=$_POST['signup_email'];
           echo true;   

}
