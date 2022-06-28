<?php
session_start();
include_once "../DBMethodes/gestion_article.php";
include_once "../DBMethodes/article.php";
include_once "../DBMethodes/gestion_vendeur.php";

include_once "../DBMethodes/DataAccess.php";

if($_GET['opes']=="del"){
    $req = "delete from categorie where id={$_GET['id']}";

    $resulat = Dataaccess::selection($req);
$a=gestion_article::delete($_GET['id']);
echo "<script>window.location.href='../pages/manage.php'</script>";
}
else if($_GET['opes']="add"){
    $target = "../images_uplouad/".basename($_FILES['imageGame']['name']);
    $image=$_FILES['imageGame']['name'];
    move_uploaded_file($_FILES['imageGame']['tmp_name'],$target);




    $vendeurid=gestion_vendeur::slectvendeurid($_SESSION['iduser']);
    while($row=$vendeurid->fetch()){
        $id_vendeur=$row['idv'];
    }

    $article=new articlee($_POST['nomJeu'],$_POST['Desc'],$id_vendeur,$_POST['real'],18,$_POST['prix'],$image);
    
    $b=gestion_article::addarticle($article);

    
    $get_id_art=gestion_article::select_id_article($id_vendeur);
    

    while($row=$get_id_art->fetch()){
        $id_art=$row['id'];
        
    }
    $req3 = "INSERT INTO `categorie`(`id`, `catg`, `utile`) VALUES ('$id_art','{$_POST['categ']}','{$_POST['categ']}')";

    $resulat = Dataaccess::majour($req3);
    echo "<script>window.location.href='../pages/manage.php'</script>";


    

}
