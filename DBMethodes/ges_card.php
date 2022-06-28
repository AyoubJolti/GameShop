<?php
include_once "DataAccess.php";
class ges_card{

  static function addtocard($id_art,$id_user){
    $req = "insert into card(id_art,id_user) 
            VALUES('$id_art','$id_user')";

        $resulat = Dataaccess::majour($req);
        return $resulat;

}
static function slect($id){
    $req = "SELECT * FROM card INNER JOIN article ON card.id_art=article.id WHERE id_user='$id'";

        $resulat = Dataaccess::selection($req);
        return $resulat;

}
static function total($id){
    $req="SELECT SUM(prix)  from card INNER JOIN article on article.id=card.id_art
    WHERE id_user=$id";
        $resulat = Dataaccess::selection($req);
        return $resulat;

}

static function delete($id_art){
    $req = "delete from card where id_art='$id_art'";

        $resulat = Dataaccess::majour($req);
        return $resulat;

}


}
