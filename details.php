<?php
/**
 * Created by PhpStorm.
 * User: izaitere
 * Date: 2017-01-21
 * Time: 16:22
 */
require_once 'defines.php';
$page_title = 'details';
?>
<?php
require_once 'views/page_head.php';
require_once 'views/header.php';
require_once 'views/aside.php';

//affichage initial du formulaire
$en_reception = array_key_exists('saisie_nom', $_POST)
    && array_key_exists('saisie_prenom', $_POST)
    && array_key_exists('saisie_email', $_POST);

//reception des données
//reception nom
$nom='';
$nom_valide= true;
if (array_key_exists('saisie_nom', $_POST)) {
    // PHP assure le filtrage de la chaîne d'entrée
    $nom = filter_input(INPUT_POST, 'saisie_nom', FILTER_SANITIZE_STRING);
    $nom_valide = (1 === preg_match('/\w{2,}/', $nom)); // deux caracteres min
}

//reception prenom
$prenom = '';
$prenom_valide = true;
if (array_key_exists('saisie_prenom', $_POST)) {
    $prenom = filter_input(INPUT_POST, 'saisie_prenom', FILTER_SANITIZE_STRING);
    // 2 caractères minimum, le premier est un caractère majuscule
    $prenom_valide = (1 === preg_match('/[A-Z]\w{1,}/', $prenom));
}

//reception du courriel
$email = '';
$email_valide = true;
if (array_key_exists('saisie_email', $_POST)) {
    $email = filter_input(INPUT_POST, 'saisie_email', FILTER_SANITIZE_STRING);
    $email_valide = (false !== filter_var($email, FILTER_VALIDATE_EMAIL));
}

//reception choix des villes
$villes = array();
$villes_valide = true;
if(array_key_exists('villes', $_POST)){
    $villes = $_POST['villes'];
}

//ville valide si on est en affcihage ou bien on a au moins une ville cochée
if($en_reception && empty($villes)){
    $villes_valide = false; // une ville au moins cochée
}




?>

<main>
    <h2>Présentez vous</h2>
    <form id="formulaire" action="<?= basename(__FILE__) ?>" method="post">
        <div class="<?= $nom_valide ? '' : 'invalid' ?>">
            <label for="saisie_nom">Nom : </label>
            <input type="text" placeholder="(entrez votre nom)" id="saisie_nom" name="saisie_nom" value="<?= $nom ?>"/>
            <?php if ( ! $nom_valide) { ?>
                <p>Le nom doit contenir au moins deux caractères.</p>
            <?php } ?>
        </div>
        <div class="<?= $prenom_valide ? '' : 'invalid' ?>">
            <label for="saisie_prenom">Prénom : </label>
            <input type="text" placeholder="(entrez votre prénom)" id="saisie_prenom" name="saisie_prenom" value="<?= $prenom ?>"/>
            <?php if ( ! $prenom_valide) { ?>
                <p>Le prénom doit contenir 2 caractères minimum, le premier étant un caractère majuscule.</p>
            <?php } ?>
        </div>
        <div class="<?= $email_valide ? '' : 'invalid' ?>">
            <label for="saisie_email">Courriel : </label>
            <input type="text" placeholder="(entrez votre courriel)" id="saisie_email" name="saisie_email" value="<?= $email ?>"/>
            <?php if ( ! $email_valide) { ?>
                <p>L'adresse courriel n'est pas valide.</p>
            <?php } ?>
        </div>
        <div class="<?= $villes_valide ? '' : 'invalid' ?>">
            <label for="ville_mtl">Montreal : </label>
            <input type="checkbox" id="ville_mtl" name="villes[]" value="ville_mtl"
                <?= array_key_exists('villes', $_POST) && in_array('ville_mtl', $_POST['villes']) ? 'checked="checked"' : ''?>
            />
            <label for="ville_qbc">Quebec : </label>
            <input type="checkbox" id="ville_qbc" name="villes[]" value="ville_qbc"
                <?= array_key_exists('villes', $_POST) && in_array('ville_qbc', $_POST['villes']) ? 'checked="checked"' : ''?>
            />
            <label for="ville_shrbk">Sherbrook : </label>
            <input type="checkbox" id="ville_shrbk" name="villes[]" value="ville_shrbk"
                <?= array_key_exists('villes', $_POST) && in_array('ville_shrbk', $_POST['villes']) ? 'checked="checked"' : ''?>
            />
            <?php if ( ! $villes_valide) { ?>
                <p>Choisissez au moins une ville</p>
            <?php } ?>
        </div>
        <div>
            <input type="submit" value="Soumettre"/>

        </div>


</main>


<?php
require_once 'views/footer.php';
?>
</body>
</html>

