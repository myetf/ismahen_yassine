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
            <div class="logo_test col-4">
            </div>

            <!--Menu hamburger-->
            <div class="mobile-nav col-8" >
                <div class="menu-btn" id="menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>



                <div id="menu" class="responsive-menu col-10">
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
            </div>
        </div><!--fin section menu-->
    </div><!--fin container-->
</div>
