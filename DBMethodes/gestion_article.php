<?php
include_once "DataAccess.php";
class gestion_article
{

    static function addarticle(articlee $a)
    {
        $titre = $a->gettitre();
        $decs = $a->getdecs();
        $vendeur_id = $a->getvendeur_id();
        $realisateur = $a->getrealisateur();
        $limate_age = $a->getlimate_age();
        $prix=$a->getprix();
        $image_url=$a->getimage_url();
        $req ="INSERT into article(titre,description,vendeur_id,realisateur,limite_age,prix,image_url) 
            VALUES('$titre','$decs','$vendeur_id','$realisateur','$limate_age','$prix','$image_url')";

        $resulat = Dataaccess::majour($req);
        return $resulat;
    }
    static function delete_article($id)
    {
        
        $req = "DELETE from article WHERE id=$id";

        $resulat = Dataaccess::majour($req);
        return $resulat;
    }
    static function selection_data($id)
    {
        
        $req = "SELECT * from vendeur v INNER JOIN article a on v.id=a.vendeur_id";

        $resulat = Dataaccess::selection($req);
        return $resulat;
    }
    static function selection_all()
    {
        
        $req=" SELECT *,article.id as idart from article INNER join vendeur on vendeur.id=	article.vendeur_id
        INNER join categorie on categorie.id=article.id  ORDER by article.id DESC LIMIT 8";

        $resulat = Dataaccess::selection($req);
        return $resulat;
    }
    static function selection_allE_witoutLimit()
    {
        
        $req=" SELECT *,article.id as idart from article INNER join vendeur on vendeur.id=	article.vendeur_id
        INNER join categorie on categorie.id=article.id  ORDER by article.id DESC ";

        $resulat = Dataaccess::selection($req);
        return $resulat;
    }
    static function update_data($data)
    {
        $titre=$data['titre'];
        $realisateur=$data['realisateur'];
        $limate_age=$data['limite_age'];
        $prix=$data['prix'];
        $image_url=$data['image_url'];
        $description=$data['description'];
        
        $req = "UPDATE article set titre='$titre',
        description='$description',realisateur='$realisateur',
        limite_age='$limate_age',prix='$prix',image_url='$image_url';";

        $resulat = Dataaccess::majour($req);
        return $resulat;
    }
    static function best_salers()
    {
        
        $req = "select * from article ORDER by prix  LIMIT 8";

        $resulat = Dataaccess::selection($req);
        return $resulat;
    }
    static function select_all()
    {
        
        $req = "select * from article ORDER by id  decs";

        $resulat = Dataaccess::selection($req);
        return $resulat;
    }
    static function select_vend_catg($cat){
        $req=" SELECT *,article.id as idart from article INNER join vendeur on vendeur.id=	article.vendeur_id
        INNER join categorie on categorie.id=article.id WHERE categorie.catg='$cat'  ORDER by article.id ";
         $resulat = Dataaccess::selection($req);
         return $resulat;
    }
    static  function slect_by_id_article($id)
    {
        $req="select * from article a INNER join vendeur v on a.vendeur_id=v.id
        INNER join categorie c on c.id=a.id  where a.id=$id";
        $resulat = Dataaccess::selection($req);
         return $resulat;
    }
    static function selection_data_BY_VendeurId($id)
    {
        
        $req = "SELECT *,article.id as idart from vendeur v INNER JOIN article  on v.id=article.vendeur_id   INNER JOIN categorie on article.id=categorie.id WHERE id_users='$id'";

        $resulat = Dataaccess::selection($req);
        return $resulat;
    }
    static function delete($id)
    {
        
        $req = "delete from article where id=$id";

        $resulat = Dataaccess::selection($req);
        return $resulat;
    }
    static function select_id_article($id)
    {
        
        $req="SELECT id as id from article WHERE article.vendeur_id='$id' ORDER BY id DESC LIMIT 1";

        $resulat = Dataaccess::selection($req);
        return $resulat;
    }


    
    
}

?>