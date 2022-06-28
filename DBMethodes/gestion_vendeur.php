<?php
    include_once 'Dataaccess.php';

    class gestion_vendeur
    {
        
        static function GetVendeur($mail,$password)
        {
            $req="SELECT * FROM vendeur where mail='$mail' and password='$password'";
            $cur=Dataaccess::selection($req);
            $resulat=$cur->rowCount();
            return $resulat;

        }
       
        // static function addVendeur($nom,$email,$password,$dateN,$telephone,$cin)
        // {
        //     $req="INSERT into vendeur(name,mail,vendeur.password,dateNaissance,numeroTel,CarteIdrntite)
        //     VALUES('$nom','$email','$password','$dateN','$telephone','$cin')";
        //     $resulat=Dataaccess::majour($req);
        //     //INSERT INTO article(titre,description,vendeur_id,realisateur,limite_age,prix,image_url);
        //     return $resulat;
        // }
        static function addVendeur(vendeur $v)
        {
            $nom=$v->getname();
            
            $dateN=$v->getdateNaissance();
            $telephone=$v->getnumeroTel();
            $cin=$v->getCarteIdrntite();
            $id_users=$v->getid_users();
            $req="INSERT into vendeur(name,dateNaissance,numeroTel,CarteIdrntite,id_users)
            VALUES('$nom','$dateN','$telephone','$cin','$id_users')";
            $resulat=Dataaccess::majour($req);
            //INSERT INTO article(titre,description,vendeur_id,realisateur,limite_age,prix,image_url);
            return $resulat;
        }
        static function slectvendeurid($id_users){
            $req="SELECT vendeur.id as idv FROM vendeur INNER join users on users.id=vendeur.id_users WHERE id_users='$id_users'";
            $resulat=Dataaccess::selection($req);
            //INSERT INTO article(titre,description,vendeur_id,realisateur,limite_age,prix,image_url);
            return $resulat;

        }
    }

