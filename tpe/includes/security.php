<?php
/**
 * Created by PhpStorm.
 * User: simonb
 * Date: 01/12/2017
 * Time: 09:33
 */
session_start();
/* INFO :
CE FICHIER EST TRES IMPORTANT ET DOIT ETRE INCLUS DANS CHAQUE FICHIER DU PANEL ADMIN
IL CONSISTE A VERIFIER SI L'UTILISATEUR EST CONNECTE OU NON.
IL VERIFIE EGALEMENT SI L'UTILISATEUR A LA PERMISSION D'ACCEDER A LA PAGE
*/
require_once 'database.php';
include_once 'functions.php';
$db = new \db\database();
$security_errors = [];
$ip = $_SERVER['REMOTE_ADDR'];

if(!empty($_SESSION['user_infos']['username'])) {
    $check_ip = 'SELECT * FROM users WHERE username = \'' . $_SESSION['user_infos']['username'] . '\'';
    $query_check_ip = $db->query(
        $check_ip
    );

    if($query_check_ip[0]->last_ip == $ip) { // Verification des IP dans la base de données
        if($query_check_ip[0]->rank >= $required_rank) {
            $display_page = true;// On affiche la page
        } else {
            $security_errors['need_rank'] = get_lang('SECURITY__UNAUTHORIZED_ACCESS');
            header('Location: /tpe/home');
        }
    } else {
        unset($_SESSION['user_infos']);
        $security_errors['security_alert'] = get_lang('SECURITY__LOGGED_OUT');
        header('Location: /tpe/login');
    }
} else {
    $security_errors['nothing_in_session'] = get_lang('SECURITY__PLEASE_CONNECT');
    header('Location: /tpe/login');
}
$_SESSION['security_errors'] = $security_errors;