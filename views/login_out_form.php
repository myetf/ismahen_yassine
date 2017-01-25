<?php
/**
 * form conn deco
 * User: izaitere
 * Date: 2017-01-25
 * Time: 12:56
 */
?>
<?php if (is_logged_in()) { ?>
    <span>Salut <?= $_SESSION[PS_USERNAME] ?> ! </span>
    <form name="logout" method="post">
        <input type="submit" name="logout_btn" value="Déconnecter" />
    </form>
<?php } else { ?>
    <form name="login" method="post">
        <input type="text" name="username" id="username"
               value="<?= array_key_exists('username',$_POST) ? $_POST['username'] : '' ?>"
        />
        <input type="password" name="password" id="password" value="" />
        <?php // Afficher un message dans le cas ou l'authentification n'a pas réussi
        if (array_key_exists('login_btn',$_POST)) { ?>
            <p>Le pseudo et le mot de passe fournis ne concordent pas.</p>
        <?php } ?>
        <input type="submit" name="login_btn" value="Connecter" />
    </form>
<?php } ?>
