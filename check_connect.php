<?php
/**
 * Created by PhpStorm.
 * User: izaitere
 * Date: 2017-01-25
 * Time: 13:04
 */

require_once 'user_authenticate.php'; //code pour authentification
define('PS_USERNAME','ps_username');
session_start(); //demarrage session
/**
 * indique si l utilisateur est connecte ou pas
 * @return bool
 */

function is_logged_in(){
    return (array_key_exists(PS_USERNAME,$_SESSION) && ! empty($_SESSION[PS_USERNAME]));
}

// Réception des données de formulaire
if (is_logged_in() && array_key_exists('logout_btn', $_POST)) {
    // Déconnexion à effectuer
    $_SESSION[PS_USERNAME]= ''; //convention : username chaine vide signifie non connecté

} else if ( ! is_logged_in()
    && array_key_exists('login_btn', $_POST)
    && array_key_exists('username', $_POST)
    && array_key_exists('password', $_POST)) {
    // Connexion à effectuer ici
    // Filtrage et Validation
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $username_valide = (1===preg_match('/\w{5,}/', $username));
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $password_valide = (1===preg_match('/\w{6,}/', $password));
    if ($username_valide
        && $password_valide
        && user_authenticate($username, $password)) {
        // Si tout se passe bien on le connecte
        $_SESSION[PS_USERNAME]= $username; //terminer pour le login

    }
}