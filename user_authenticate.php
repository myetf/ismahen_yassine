<?php

require_once ('conn.php');
//$users = array(
//    45 => array(
//        'username' => 'Steve',
//        'password' => '5c054241e508fe4a774379ad7af0aea1',
//    ),
//    22 => array(
//        'username' => 'Mohamed Yassine',
//        'password' => 'fb60a2ee571eb726444da7cc80b42377',
//    ),
//    11 => array(
//        'username' => 'Mamadou',
//        'password' => '037c7c82bea794d63d8317a3bec43b2b',
//    ),
//    15 => array(
//        'username' => 'Sophie',
//        'password' => 'e10adc3949ba59abbe56e057f20f883e',
//    ),
//    98 => array(
//        'username' => 'Willy',
//        'password' => '70fac921f2bb7baaf39e17db7836ca28',
//    ),
//    66 => array(
//        'username' => 'Abderraouf',
//        'password' => '42e266b53bd462e38442ba94a41750ae',
//    ),
//    54 => array(
//        'username' => 'Ismahen',
//        'password' => 'f5264468ddda1278dc1302822a96cd96',
//    ),
//    38 => array(
//        'username' => 'Amin',
//        'password' => 'd67a7a704c95ce9a85ce39ffaf22a4d4',
//    ),
//);

//print_r($users);

/**
 * Verifie si le username et le password correspondent à un utilisateur valide
 * On cherche un user avec le même username et on compare le md5 du password fourni
 * avec celui qui est enregistré pour le user
 * Renvoie true si valide, false sinon
 */
function user_authenticate($username, $password) {
    // en PHP il faut déclarer une variable globales
    // pour pouvoir l'utiliser dans une fonction

    global $users;
    $result = false;
    // Rechercher
    foreach ($users as $user_id => $user) {
        if (($user['username'] === $username)
            && ($user['password'] == md5($password))) {
            // Utilisateur trouvé et authentifié
            $result = true;
            $_SESSION['rang']=$user['rang'];
            break;
        }
    }
    return $result;
};