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

        <section class="container cat_articles row col-9">
            <div id="fig1" class="row">
            <h1>SOLDES!</h1>
            <img class="col-12" src="images/homme.jpeg" alt="">
                <dl id="infos">
                    <dt id="infos1">40%</dt>
                    <dd id="infos1_exp"><a href="catalogue.php"><span>En savoir +</span></a></dd>
                </dl>
            </div>
        </section>

        <aside class="aside col-3 col-m-4">
            <h4>L'actualité du moment</h4>
            <p>Découvrez tous les évènements de cette semaine</p>
        </aside>
        <aside class="aside col-3 col-m-4">
            <h4>L'actualité du moment</h4>
            <p>Découvrez tous les évènements de cette semaine.enim ad minim veniamenim ad minim veniamenim ad minim
                veniam
                enim ad minim veniam enim ad minim veniam</p>
        </aside>
        <article class="row col-12 col-m-12">
           <img class="col-8" src="images/hmenf.jpeg" alt="">
        </article>
    </div>


<?php
require_once 'views/footer.php';
?>
</body>
</html>
