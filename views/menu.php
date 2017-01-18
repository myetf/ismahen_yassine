<?php
/**
 * Created by PhpStorm.
 * User: izaitere
 * Date: 2017-01-17
 * Time: 12:02
 */
?>
<nav>
        <ul>
            <li class="<?php if($page_title== 'Accueil'){
                 echo 'active'; } ?> "><a href="index.php">Index</a></li>
            <li class="<?php if($page_title == 'catalogue'){
                echo 'active'; } ?>"><a href="catalogue.php">Catalogue</a></li>
            <li class="<?php if ($page_title == 'Contact'){
                echo 'active'; } ?>"><a href="contact.php">Contact</a></li>



        </ul>
    </nav>

