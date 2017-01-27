<?php
/**
 * Created by PhpStorm.
 * User: izaitere
 * Date: 2017-01-17
 * Time: 12:02
 */
?>

<div id="" class="">
    <div class="container">
        <div class="row"><!-- section menu-->

                <div id="menu" class="responsive-menu col-7">
                    <ul>
                        <li class="<?php if($page_title== 'Accueil'){
                            echo 'active'; } ?> "><a href="index.php">Index</a></li>
                        <li class="<?php if($page_title == 'Catalogue'){
                            echo 'active'; } ?>"><a href="catalogue.php">Catalogue</a></li>
                        <li class="<?php if ($page_title == 'details'){
                            echo 'active'; } ?>"><a href="details.php">Détails</a></li>
                        <li class="<?php if ($page_title == 'Contact'){
                            echo 'active'; } ?>"><a href="contact.php">Contact</a></li>

                    </ul>
                </div>
                <div class="search col-3 col-m-3">
                    <form action="" method="post" id="search_mini_form">
                        <input type="search" name="text" id="" value="" placeholder="Rechercher">
                        <a href="catalogue.php"><img class="col-2" src="images/loupe.svg" alt="loupe"></a>
                    </form>
                </div>
            </div>
        </div><!--fin section menu-->
    </div><!--fin container-->
</div>
