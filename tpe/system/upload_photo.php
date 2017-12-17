<?php
session_start();
/**
 * Created by PhpStorm.
 * User: SIMON
 * Date: 10/12/2017
 * Time: 18:06
 */
$required_rank = 1;
include_once '../includes/functions.php';
include_once '../includes/security.php';
require_once '../includes/database.php';
$db = new \db\database();
$error = [];
$photo = $_FILES;
print_r($_FILES);

if($_FILES['img_file']['error'] == 0) {
    // On fait le necessaire

    $errors = [];
    $file_name = $_FILES['img_file']['name'];
    $file_size = $_FILES['img_file']['size'];
    $file_tmp = $_FILES['img_file']['tmp_name'];
    $file_type = $_FILES['img_file']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['img_file']['name'])));

    $extensions = array("jpeg", "jpg", "png", "gif");

    if (in_array($file_ext, $extensions) === false) {
        $error['extension_unauthorized'] = get_lang('PROFILE__FLASH_ERROR_EXTENSION');
        header('Location: /tpe/profile');
    }

    if (empty($error) == true) {
        $new_path = "../data/profile_pictures/" . strtolower($_SESSION['user_infos']['username']) . "." . $file_ext;
        move_uploaded_file($file_tmp, $new_path);
        $upload_success = true;
        $image = 'https://' . $_SERVER['HTTP_HOST'] . '/tpe/data/profile_pictures/' . strtolower($_SESSION['user_infos']['username']) . '.' . $file_ext;

        $db->exec('UPDATE users SET profile_pic = \'' . $image . '\' WHERE username = \'' . $_SESSION['user_infos']['username'] . '\'');
        $_SESSION['user_infos']['profile_pic'] = $image;
        $success = true;
        header('Location: /tpe/profile');

    } else {
        $error['cant_upload'] = get_lang('PROFILE__FLASH_UPLOAD_ERROR');
        header('Location: /tpe/profile');
    }
} else {
    $error['upload_error'] = get_lang('PROFILE__FLASH_UPLOAD_ERROR');
    header('Location: /tpe/rofile');
}

$_SESSION['error'] = $error;
$_SESSION['success'] = $success;
