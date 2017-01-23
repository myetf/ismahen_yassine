<?php


require_once 'defines.php';
include 'user_data.php';
$page_title = 'Catalogue';
$categorie = '';

//$categorie=$_GET['categorie'];
//$array = array('a'=>1, 'b'=>2, 'c'=>3);
//$array[] = array('d'=>4);
//print_r($array);

?>
<?php
require_once 'views/page_head.php';
require_once 'views/header.php';
require_once 'views/aside.php';

include 'user_data.php';

?>
<main>

<!--    <h2>Ceci est le main de la page catalogue</h2>-->
<!--    <ul>-->
<!--        <li><a href="?categorie=Pull">Pull</a></li>-->
<!--        <li><a href="?categorie=Veste">Veste</a></li>-->
<!--        <li><a href="?categorie=Tshirt">Tshirt</a></li>-->
<!--        <li><a href="?categorie=Jean">Jean</a></li>-->
<!--    </ul>-->
    <div class="container">
        <section class="main row">
            <div class="cont_cat">
                <div class="row images col-12">
                    <?php
                    foreach ($catalogue as $article) { ?>
                        <div class="row  col-4 col-m-6">
                            <a href="detail.html"> <img class="img_cat col-6" src="images/<?= $article['image'] ?>.jpeg"
                                                        alt="<?= $article['description'] ?>"></a>
                            <div class="info_cat">
                                <h3><?= $article['article'] ?></h3>
                                <p><?= $article['description'] ?></p>
                                <div class="btn_detail">
                                    <h4><?= $article['prix'] ?></h4>
                                    <a href="detail.html"><span class="fa fa-shopping-cart"></span></a>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>

            </div>
        </section>
    </div>
</main>
<?php
require_once 'views/footer.php';
?>
</body>
</html>