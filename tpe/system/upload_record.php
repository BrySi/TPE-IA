<?php
session_start();
/**
 * Created by PhpStorm.
 * User: SIMON
 * Date: 17/12/2017
 * Time: 17:00
 */
$required_rank = 1;
include "../includes/functions.php";
include_once '../includes/security.php';
require_once "../includes/database.php";
$db = new \db\database();

$form_data = $_POST;
//print_r($form_data);
$error = [];
    $data = file_get_contents('php://input');
    if (!empty($data)) {
        //var_dump($data);
        file_put_contents('../data/audio/' . $_SESSION['user_infos']['username'] . '.ogg', $data);
        echo 'Success';
    } else {
        echo get_lang('AUDIO__UPLOAD_ERROR');
    }
$_SESSION['error'] = $error;
