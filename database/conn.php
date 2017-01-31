<?php
// Connection
// Constantes rassemblant les infos de connexion et de schéma de la DB
define('CONN_HOST', '127.0.0.1');
define('CONN_USER', 'root');
define('CONN_PWD', '');
define('DBNAME', 'projet');

$mysqli = new mysqli(CONN_HOST, CONN_USER, CONN_PWD, DBNAME);
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

/**
 * Fournit tous les articles enregistrés dans la table article
 * Si un id de catégorie est fourni, fournit seulement les articles de cette catégorie
 * @param bool $cat_id
 * @return array
 */
function get_articles_list($cat_id=false) {
    global $mysqli;
// Sélectionner tous les articles (toutes les colonnes)
    $queryStr = 'SELECT * FROM article';
    // Si la catégorie est précisée, on ajoute une clause WHERE dans la requête
    if (false !== $cat_id) {
        $queryStr .= " WHERE `category_id` = " . $mysqli->real_escape_string($cat_id);
    }
// Execution de la requête (un select)
    $res = $mysqli->query($queryStr);
// Récupération des données
    $resultat = array();
    if ($res && ($res->num_rows > 0)) {
        while ($article = $res->fetch_assoc()) {
            $resultat[$article['id']] = $article;
        };
    };
    return $resultat;
}
function get_user_list($cat_id=false) {
    global $mysqli;
// Sélectionner tous les articles (toutes les colonnes)
    $queryStr = 'SELECT * FROM user';
    // Si la catégorie est précisée, on ajoute une clause WHERE dans la requête
    if (false !== $cat_id) {
        $queryStr .= " WHERE `id` = " . $mysqli->real_escape_string($cat_id);
    }
// Execution de la requête (un select)
    $res = $mysqli->query($queryStr);
// Récupération des données
    $resultat = array();
    if ($res && ($res->num_rows > 0)) {
        while ($user = $res->fetch_assoc()) {
            $resultat[$user['id']] = $user;
        };
    };
    return $resultat;
};
$users=get_user_list();
/**
 * Fournit un article de la table article à partir de son id
 * @param int $id
 * @return array
 */
function get_article($id) {
    global $mysqli;
// Sélectionner tous les articles (toutes les colonnes)
    $queryStr = 'SELECT * FROM article WHERE `id` = ' . $mysqli->real_escape_string($id);
// Execution de la requête (un select)
    $res = $mysqli->query($queryStr);
// Récupération des données
    $resultat = null;
    if ($res && ($res->num_rows > 0)) {
        while ($article = $res->fetch_assoc()) {
            $resultat = $article;
        };
    };
    return $resultat;
}
function get_user($id) {
    global $mysqli;
// Sélectionner tous les articles (toutes les colonnes)
    $queryStr = 'SELECT * FROM user WHERE `id` = ' . $mysqli->real_escape_string($id);
// Execution de la requête (un select)
    $res = $mysqli->query($queryStr);
// Récupération des données
    $resultat = null;
    if ($res && ($res->num_rows > 0)) {
        while ($user = $res->fetch_assoc()) {
            $resultat = $user;
        };
    };
    return $resultat;
}

/**
 * Fournit toutes les catégories de articles enregistrées dans la table article_category
 * @return array
 */
function get_categories() {
    global $mysqli;
// Sélectionner toutes les categories (toutes les colonnes)
    $queryStr = 'SELECT categorie FROM article';
// Execution de la requête (un select)
    $res = $mysqli->query($queryStr);
// Récupération des données
    $resultat = array();
    if ($res && ($res->num_rows > 0)) {
        while ($category = $res->fetch_assoc()) {
            $resultat[$category['id']] = $category;
        };
    };
    return $resultat;
}
function ajout_data($a,$b,$c,$d,$e,$f){
    global $mysqli;
    $queryString="INSERT INTO article('nom','categorie','genre','prix','description','image') VALUES($a,$b,$c,$d,$e,$f)";
    $res = $mysqli->query($queryString);
// Est-ce que la requète a bien marché ?
    $resultat_insertion = false;
    if ($res) {
        $resultat_insertion = $mysqli->insert_id;
    };
    var_dump($resultat_insertion);

}
function ajout_user($a,$b,$c,$d,$e)
{
    global $mysqli;
    $queryString = "INSERT INTO ('username','password','mail','tagname','rang') VALUES($a,$b,$c,$d,$e)";
    $res = $mysqli->query($queryString);
// Est-ce que la requète a bien marché ?
    $resultat_insertion = false;
    if ($res) {
        $resultat_insertion = $mysqli->insert_id;
    };
    var_dump($resultat_insertion);

}
function ajout(){
    if(array_key_exists('form1',$_POST)||array_key_exists('form2',$_POST))
    {
        if(array_key_exists('form1',$_POST)){
           ajout_data($_POST['nom'],$_POST['categorie'],$_POST['genre'],$_POST['prix'],$_POST['description'],$_POST['image']);
           unset($_POST['form1']);
        }else{
            ajout_user($_POST['username'],md5($_POST['password']),$_POST['mail'],$_POST['tagname'],$_POST['rang']);
            unset($_POST['form2']);
        }
    }}


// Ajouter un enregistrement
/*$queryString = "INSERT INTO ma_table (nom,age) VALUES ('from php', 44)";
$res = $mysqli->query($queryString);
// Est-ce que la requète a bien marché ?
$resultat_insertion = false;
if ($res) {
    $resultat_insertion = $mysqli->insert_id;
};
var_dump($resultat_insertion);*/
//formulaire modification

//require(dirname(__FILE__).'/../config/global.php');
//
//// On récupère l'action à effectuer (Create, Read, Update ou Delete).
//// Je compte sur vous pour utiliser un système plus perfectionné que ça. ^^
//$action = 'read';
//if(isset($_GET['action']) && in_array($_GET['action'], array('create', 'read', 'update', 'delete')))
//{
//    $action = $_GET['action'];
//}
//
///* Nous ferons ici les traitements concernant la page. */
//switch($action)
//{
//    case 'read':
//        break;
//    case 'create':
//        break;
//    case 'update':
//        break;
//    case 'delete':
//        break;
//}
//
///* Nous appellerons ici la page HTML appropriée. */
//include(HTML_DIR.$action.'.php');
