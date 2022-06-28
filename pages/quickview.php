<?php
if ($_GET['oper'] == "article") {
    $a = $_POST['id'];
    include_once "../DBMethodes/gestion_article.php";
    $article = gestion_article::slect_by_id_article($a);
    while ($row = $article->fetch()) {
        $titre = $row['titre'];
        $prix = $row['prix'];
        $name = $row['name'];
        $numeroTel = $row['numeroTel'];
        $decs = $row['description'];
        $image='../images_uplouad/'.$row['image_url'];
    }


?>
    <!-- <form action="" method="POST"> -->
    <div class="row">
        <div class="col-md-6 col-lg-7 p-b-30">
            <div class="p-l-25 p-r-30 p-lr-0-lg">
                <div class="wrap-slick3 flex-sb flex-w">
                    <div class="wrap-slick3-dots"></div>
                    <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                    <div class="slick3 gallery-lb">
                        <div class="item-slick3" data-thumb="images/product-detail-01.jpg">
                            <div class="wrap-pic-w pos-relative">
                                <img src="<?=$image?>" alt="IMG-PRODUCT" >

                                <!-- <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="../images/product-detail-01.jpg">
											<i class="fa fa-expand"></i>
										</a> -->
                            </div>
                        </div>

                        <div class="item-slick3" data-thumb="images/product-detail-02.jpg">
                            <div class="wrap-pic-w pos-relative">
                                <!-- <img src="../images/product-detail-02.jpg" alt="IMG-PRODUCT"> -->

                                <!-- <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="../images/product-detail-02.jpg">
                                    <i class="fa fa-expand"></i>
                                </a> -->
                            </div>
                        </div>

                        <div class="item-slick3" data-thumb="images/product-detail-03.jpg">
                            <div class="wrap-pic-w pos-relative">
                                <!-- <img src="../images/product-detail-03.jpg" alt="IMG-PRODUCT"> -->

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-lg-5 p-b-30" id="quickview">

            <div class="p-r-50 p-t-5 p-lr-0-lg">

                <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                    <?=$titre ?>

                </h4>

                <span class="mtext-106 cl2">
                    <?=$prix . "DH" ?>



                </span>

                <p class="stext-102 cl3 p-t-23">
                    <?= $decs ?>
                </p>



                <!--  -->
                <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                    <div class="flex-m bor9 p-r-10 m-r-11">
                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                            <i class="zmdi zmdi-favorite"></i>
                        </a>
                    </div>

                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
            <!-- </form> -->
        <?php
    }

        ?>



        <script>
            $('.js-addcart-detail').each(function() {
                var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
                $(this).on('click', function() {
                    swal(nameProduct, "is added to cart !", "success");
                });
            });
        </script>