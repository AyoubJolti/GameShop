

<?php
include_once "../DBMethodes/gestion_article.php";

if ($_GET['oper'] == "Aventure") {


    $article = gestion_article::select_vend_catg("Aventure");
    $resulat = $article->rowCount();


    while ($row = $article->fetch()) {
        $prix = $row['prix'];
        $description = $row['description'];
        $titre = $row['titre'];
        $id=$row['idart'];
        $image='../images_uplouad/'.$row['image_url'];
        ?>

        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
            <!-- Block2 -->

            <div class="block2">
                <div class="block2-pic hov-img0">
                    <img src="<?=$image?>" alt="IMG-PRODUCT" height="250px">

                    <!-- <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                        Quick View
                    </a> -->
                </div>

                <div class="block2-txt flex-w flex-t p-t-14">
                    <div class="block2-txt-child1 flex-col-l ">
                        <a href="product-detail.php?id=<?=$id?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php echo $titre; ?>
                        </a>

                        <span class="stext-105 cl3">
                            <?php echo $prix . "DH"; ?>
                        </span>
                    </div>

                    <div class="block2-txt-child2 flex-r p-t-3">
                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                            <img class="icon-heart1 dis-block trans-04" src="../images/icons/icon-heart-01.png" alt="ICON">
                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="../images/icons/icon-heart-02.png" alt="ICON">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
} else if ($_GET['oper'] == "Sport") {
    $article = gestion_article::select_vend_catg("Sport");
    $resulat = $article->rowCount();

    while ($row = $article->fetch()) {
        $prix = $row['prix'];
        $description = $row['description'];
        $titre = $row['titre'];
        $id=$row['idart'];
        $image='../images_uplouad/'.$row['image_url'];
        ?>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
            <!-- Block2 -->

            <div class="block2">
                <div class="block2-pic hov-img0">
                <img src="<?=$image?>" alt="IMG-PRODUCT" height="250px">

                    <!-- <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                        Quick View
                    </a> -->
                </div>

                <div class="block2-txt flex-w flex-t p-t-14">
                    <div class="block2-txt-child1 flex-col-l ">
                        <a href="product-detail.php?id=<?=$id?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php echo $titre; ?>
                        </a>

                        <span class="stext-105 cl3">
                            <?php echo $prix . "DH"; ?>
                        </span>
                    </div>

                    <div class="block2-txt-child2 flex-r p-t-3">
                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                            <img class="icon-heart1 dis-block trans-04" src="../images/icons/icon-heart-01.png" alt="ICON">
                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="../images/icons/icon-heart-02.png" alt="ICON">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>

    <?php



} else if ($_GET['oper'] == "Horreur") {

    $article = gestion_article::select_vend_catg("Horreur");
    $resulat = $article->rowCount();

    while ($row = $article->fetch()) {
        $prix = $row['prix'];
        $description = $row['description'];
        $titre = $row['titre'];
        $id=$row['idart'];
        $image='../images_uplouad/'.$row['image_url'];
        ?>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
            <!-- Block2 -->

            <div class="block2">
                <div class="block2-pic hov-img0">
                <img src="<?=$image?>" alt="IMG-PRODUCT" height="250px" width="200px">

                    <!-- <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                        Quick View
                    </a> -->
                </div>

                <div class="block2-txt flex-w flex-t p-t-14">
                    <div class="block2-txt-child1 flex-col-l ">
                        <a href="product-detail.php?id=<?=$id?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php echo $titre; ?>
                        </a>

                        <span class="stext-105 cl3">
                            <?php echo $prix . "DH"; ?>
                        </span>
                    </div>

                    <div class="block2-txt-child2 flex-r p-t-3">
                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                            <img class="icon-heart1 dis-block trans-04" src="../images/icons/icon-heart-01.png" alt="ICON">
                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="../images/icons/icon-heart-02.png" alt="ICON">
                        </a>
                    </div>
                </div>
            </div>
        </div>


    <?php
    }
} else if ($_GET['oper'] == "all") {
    
    include_once "../DBMethodes/gestion_article.php";
    $article = gestion_article::selection_all();
    $resulat = $article->rowCount();

    while ($row = $article->fetch()) {
        $prix = $row['prix'];
        $description = $row['description'];
        $titre = $row['titre'];
        $id=$row['idart'];
        $image='../images_uplouad/'.$row['image_url'];

    ?>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
            <!-- Block2 -->

            <div class="block2">
                <div class="block2-pic hov-img0">
                <img src="<?=$image?>" alt="IMG-PRODUCT" height="250px" >

                    <!-- <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                        Quick View
                    </a> -->
                </div>

                <div class="block2-txt flex-w flex-t p-t-14">
                    <div class="block2-txt-child1 flex-col-l ">
                        <a href="product-detail.php?id=<?=$id?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php echo $titre; ?>
                        </a>

                        <span class="stext-105 cl3">
                            <?php echo $prix . "DH"; ?>
                        </span>
                    </div>

                    <div class="block2-txt-child2 flex-r p-t-3">
                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                            <img class="icon-heart1 dis-block trans-04" src="../images/icons/icon-heart-01.png" alt="ICON">
                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="../images/icons/icon-heart-02.png" alt="ICON">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
} else if ($_GET['oper'] == "Action") {

    include_once "../DBMethodes/gestion_article.php";
    $article = gestion_article::select_vend_catg("Action");
    $resulat = $article->rowCount();

    while ($row = $article->fetch()) {
        $prix = $row['prix'];
        $description = $row['description'];
        $titre = $row['titre'];
        $id=$row['idart'];
        $image='../images_uplouad/'.$row['image_url'];
        ?>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
            <!-- Block2 -->

            <div class="block2">
                <div class="block2-pic hov-img0">
                <img src="<?=$image?>" alt="IMG-PRODUCT" height="250px">

                    <!-- <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                        Quick View
                    </a> -->
                </div>

                <div class="block2-txt flex-w flex-t p-t-14">
                    <div class="block2-txt-child1 flex-col-l ">
                        <a href="product-detail.php?id=<?=$id?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php echo $titre; ?>
                        </a>

                        <span class="stext-105 cl3">
                            <?php echo $prix . "DH"; ?>
                        </span>
                    </div>

                    <div class="block2-txt-child2 flex-r p-t-3">
                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                            <img class="icon-heart1 dis-block trans-04" src="../images/icons/icon-heart-01.png" alt="ICON">
                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="../images/icons/icon-heart-02.png" alt="ICON">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
} else if ($_GET['oper'] == "RPG") {

    include_once "../DBMethodes/gestion_article.php";
    $article = gestion_article::select_vend_catg("RPG");
    $resulat = $article->rowCount();

    while ($row = $article->fetch()) {
        $prix = $row['prix'];
        $description = $row['description'];
        $titre = $row['titre'];
        $id=$row['idart'];
        $image='../images_uplouad/'.$row['image_url'];
        ?>
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
            <!-- Block2 -->

            <div class="block2">
                <div class="block2-pic hov-img0">
                <img src="<?=$image?>" alt="IMG-PRODUCT" height="250px" >

                    <!-- <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                        Quick View
                    </a> -->
                </div>

                <div class="block2-txt flex-w flex-t p-t-14">
                    <div class="block2-txt-child1 flex-col-l ">
                        <a href="product-detail.php?id=<?=$id?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            <?php echo $titre; ?>
                        </a>

                        <span class="stext-105 cl3">
                            <?php echo $prix . "DH"; ?>
                        </span>
                    </div>

                    <div class="block2-txt-child2 flex-r p-t-3">
                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                            <img class="icon-heart1 dis-block trans-04" src="../images/icons/icon-heart-01.png" alt="ICON">
                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="../images/icons/icon-heart-02.png" alt="ICON">
                        </a>
                    </div>
                </div>
            </div>
        </div>
      


<?php
    }
}


?>




<script>
    
    	$('.js-addwish-b2').on('click', function(e) {
		e.preventDefault();
	});

	$('.js-addwish-b2').each(function() {
        alert('hello');
		var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
		$(this).on('click', function() {
			swal(nameProduct, "is added to wishlist !", "success");

			$(this).addClass('js-addedwish-b2');
			$(this).off('click');
		});
	});

	$('.js-addwish-detail').each(function() {
        alert('hello');
		var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

		$(this).on('click', function() {
			swal(nameProduct, "is added to wishlist !", "success");

			$(this).addClass('js-addedwish-detail');
			$(this).off('click');
		});
	});

</script>




