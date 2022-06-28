<?php
    include_once 'Dataaccess.php';

    class gestion_enfant
    {
        
        static function Getenfant($mail,$password)
        {
            $req="SELECT * FROM client_enf WHERE mail='$mail' and password='$password';";
            $cur=Dataaccess::selection($req);
            $resulat=$cur->rowCount();
            return $resulat;

        }
       
        // static function addenfant($nom,$email,$password,$dateN,$telephone,$id_par)
        // {
        //     $req="INSERT into client_enf(client_enf.name,client_enf.mail,client_enf.password,dateNaissance,client_enf.numeroTel,id_parent)
        //     VALUES('$nom','$email','$password','$dateN','$telephone',$id_par);";
            
        //     $resulat=Dataaccess::majour($req);
        //     return $resulat;
        // }
        static function addenfant(enfant $e)
        {
            $nom=$e->getname();
            $password=$e->getpassword();
            $dateN=$e->getdateNaissance();
            $telephone=$e->getnumeroTel();
            $email=$e->getmail();
            $id_par=$e->getid_parent();
            $req="INSERT into client_enf(client_enf.name,client_enf.mail,client_enf.password,dateNaissance,client_enf.numeroTel,id_parent)
            VALUES('$nom','$email','$password','$dateN','$telephone',$id_par);";
            
            $resulat=Dataaccess::majour($req);
            return $resulat;
        }
    }

?>