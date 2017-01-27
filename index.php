<?php
require_once 'defines.php';
$page_title = 'Accueil';
?>
<?php
require_once 'check_connect.php';
require_once 'views/page_head.php';
require_once 'views/header.php';
require_once 'views/aside.php';
include 'user_data.php';
?>

    <!--   ---------------------------------------------------------------     section main (slide)  -->



    <div class="container"><!--container main-->
        <section class="main row">
            <article id="slider" class="slide col-8 col-m-12">
                <figure class="col-8 col-m-12">
                    <img src="images/slide1.jpeg" alt="photo"/>
                    <img src="images/slide2.jpeg" alt="photo"/>
                    <img src="images/slide3.jpeg" alt="photo"/>
                    <img src="images/slide4.jpeg" alt="photo"/>
                    <img src="images/slide5.jpeg" alt="photo"/>

                </figure>
            </article>

            <div class="row banner">
                <div class="row main_art col-3 col-m-6">
                    <img class="img_main col-4" src="images/soiree.jpeg" alt="">
                    <div class="infos col-3">
                        <h3>Découvrez en exclusivités</h3>
                        <p>le legging</p>
                    </div>
                </div>
                <div class="row main_art col-3 col-m-6">
                    <img class="img_main col-4" src="images/soiree2.jpeg" alt="">
                    <div class="infos col-3">
                        <h3>Découvrez en exclusivités</h3>
                        <p>le legging</p>
                    </div>
                </div>

            </div><!--fin produits vedette-->
            </section>

            <!--   -------------------------------------------------------------  section main (new prod)  -->

            <section class="container cat_articles row col-10">
                <div class="row">
                <article class="articles_items col-4 col-m-12">
                    <ul>
                        <?php foreach ($catalogue as $article){ ?>
                            <li class="row art_ind col-4 col-m-12">
                                <a href="#"><img class="img_art col-6" src="images/<?= $article['image'] ?>.jpeg" alt=""></a>

                                <div class="col-3 text_articles">
                                    <h3><a href="<? $article['nom'] ?>">Découvrez en exclusivités</a></h3>
                                    <p class="col-3"><? $article['Description'] ?></p>
                                </div>
                            </li>
                      <?php  } ?>

                    </ul>
                </article>
                    <article class="articles_items col-4 col-m-12">
                        <ul>
                            <?php foreach ($catalogue as $article){ ?>
                                <li class="row art_ind col-4 col-m-12">
                                    <a href="#"><img class="img_art col-6" src="images/<?= $article['image'] ?>.jpeg" alt=""></a>

                                    <div class="col-3 text_articles">
                                        <h3><a href="<? $article['nom'] ?>">Découvrez en exclusivités</a></h3>
                                        <p class="col-3"><? $article['Description'] ?></p>
                                    </div>
                                </li>
                            <?php  } ?>

                        </ul>
                    </article>
                    <article class="articles_items col-4 col-m-12">
                        <ul>
                            <?php foreach ($catalogue as $article){ ?>
                                <li class="row art_ind col-4 col-m-12">
                                    <a href="#"><img class="img_art col-6" src="images/<?= $article['image'] ?>.jpeg" alt=""></a>

                                    <div class="col-3 text_articles">
                                        <h3><a href="<? $article['nom'] ?>">Découvrez en exclusivités</a></h3>
                                        <p class="col-3"><? $article['Description'] ?></p>
                                    </div>
                                </li>
                            <?php  } ?>

                        </ul>
                    </article>
                </div>
            </section>
                <div class="aside col-2 col-m-4">
                    <h4>L'actualité du moment</h4>
                    <p>Découvrez tous les évènements de cette semaine</p>
                </div><!--fin produits vedette-->
                <div class="aside col-2 col-m-4">
                    <h4>L'actualité du moment</h4>
                    <p>Découvrez tous les évènements de cette semaine</p>
                </div>
                <div class="aside col-2 col-m-4">
                    <h4>L'actualité du moment</h4>
                    <p>Découvrez tous les évènements de cette semaine</p>
                </div>
                <div class="aside col-2 col-m-4">
                    <h4>L'actualité du moment</h4>
                    <p>Découvrez tous les évènements de cette semaine</p>
                </div>


    </div><!--fin container main -->

<?php
require_once 'views/footer.php';
?>
</body>
</html>
