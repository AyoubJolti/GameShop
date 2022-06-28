<?php
include_once  "DataAccess.php";

class gestion_user{
    static function GetUser($mail,$password)
    {
        $req="SELECT * from users WHERE users.login='$mail' and users.passworde='$password'";
        $cur=Dataaccess::selection($req);
        $resulat=$cur->rowCount();
        return $resulat;

    }
    static function GetIdUser($mail,$password)
    {
        $req="SELECT * from users WHERE users.login='$mail' and users.passworde='$password'";
        $resulat=Dataaccess::selection($req);
        return $resulat;

    }
    static function add_user($mail,$password,$type)
    {
        $req="INSERT into users(login,passworde,type)VALUES('$mail','$password','$type');";
        $resulat=Dataaccess::majour($req);
        return $resulat;

    }
    static function GetUser_info($mail,$password)
    {
        $req="SELECT * from users WHERE users.login='$mail' and users.passworde='$password'";
        $resulat=Dataaccess::selection($req);
       
        return $resulat;

    }
}

?>