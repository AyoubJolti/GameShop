<?php
    include_once 'Dataaccess.php';

    class gestion_parent
    {
        
        static function GetParent($mail,$password)
        {
            $req="SELECT * FROM client_pr where mail='$mail' and client_pr.password='$password'";
            $cur=Dataaccess::selection($req);
            $resulat=$cur->rowCount();
            return $resulat;

        }
       
        // static function addVendeur($nom,$email,$password,$dateN,$telephone,$cin)
        // {
        //     $req="INSERT into client_pr(client_pr.name,client_pr.mail,client_pr.password,client_pr.dateNaissance,client_pr.numeroTel) 
        //     VALUES('$nom','$email','$password','$dateN','$telephone','$cin');";
        //     $resulat=Dataaccess::majour($req);
        //     return $resulat;
        // }
        static function addParent(parente $p)
        {
            $nom=$p->getname();
            $id_users=$p->getid_users();
            $dateN=$p->getdateNaissance();
            $telephone=$p->getnumeroTel();
            $req="INSERT into client_pr(name,dateNaissance,numeroTel,id_users) 
            VALUES('$nom','$dateN','$telephone','$id_users')";
            $resulat=Dataaccess::majour($req);
            return $resulat;
        }
    }
?>