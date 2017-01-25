<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= NOM_SITE, ':',$page_title?></title>
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="css/font-awesome.css"/>
    <link rel="stylesheet" href="style/main.css" />
    <link rel="stylesheet" href="style/lightbox.css" />
    <link rel="stylesheet" href="style/remodal.css" />
    <link rel="stylesheet" href="style/remodal-default-theme.css" />
</head>
<script src="script/jquery-3.1.1.min.js"></script>
<script src="script/main.js"></script>
<script src="script/lightbox.js"></script>
<script src="script/remodal.js"></script>
<body>
<h1><?php echo is_logged_in() ? 'Déconnexion' : 'Connexion'; ?></h1>
<?php
require 'views/login_out_form.php';
?>