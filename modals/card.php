<?php
session_start();
include_once '../DBMethodes/ges_card.php';
include_once '../DBMethodes/card.php';

if($_GET['opes']=='addto'){
    $a=$_POST['idart'];
    echo $_SESSION['iduser'];
    
$add=ges_card::addtocard($a,$_SESSION['iduser']);
}
else
 if($_GET['opes']=='del'){
     $del=ges_card::delete($_GET['idart']);
     echo "<script>window.location='../pages/shoping-cart.php'</script>";
     
 }


?>