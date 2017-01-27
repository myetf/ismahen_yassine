<?php
/** Initialisation du panier */
require_once 'check_connect.php';

/* Initialisation du panier */
$_SESSION['panier'] = array();


require_once('conn.php');
require_once 'defines.php';
//include 'user_data.php';
$page_title = 'Catalogue';
//$categorie = '';
$articles = get_articles_list();


//$categorie=$_GET['categorie'];
//$array = array('a'=>1, 'b'=>2, 'c'=>3);
//$array[] = array('d'=>4);
//print_r($array);

require_once 'views/page_head.php';
require_once 'views/header.php';
require_once 'views/aside.php';


var_dump($_SESSION['rang']);
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
                    foreach ($articles as $article) { ?>
                        <div class="col-4 col-m-6">
                            <a class="example-image-link" data-title="<?= $article['nom'] ?>"  data-lightbox="example-<?= $article['id'] ?>" href="images/<?= $article['image'] ?>"><img class="img_cat col-6 example-image" src="images/<?= $article['image'] ?>"
                                                        alt="<?= $article['description'] ?>"></a>
                            <div class="info_cat">
                                <h3><?= $article['nom'] ?></h3>
                                <p><?= $article['description'] ?></p>
                                <div class="btn_detail">
                                    <a href="#modal<?= $article['id'] ?>"><span class="fa fa-shopping-cart"></span><?= $article['prix'] ?>$</a>
                                </div>
                            </div>
                        </div>
                        <div class="remodal" data-remodal-id="modal<?= $article['id'] ?>" role="dialog" aria-labelledby="modal<?= $article['id'] ?>Title" aria-describedby="modal<?= $article['id'] ?>Desc">
                            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                            <div>
                                <h2 id="modal<?= $article['id'] ?>Title"><?= $article['nom'] ?></h2>
                                <p id="modal<?= $article['id'] ?>Desc">
                                    Désirez vous prendre cet article?
                                </p>
                            </div>
                            <br>
                            <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                            <button data-remodal-action="confirm" class="remodal-confirm">Ajouter au Panier</button>
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