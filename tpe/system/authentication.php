<?php
session_start();
/**
 * Created by PhpStorm.
 * User: SIMON
 * Date: 18/11/2017
 * Time: 12:33
 */
require_once "../includes/database.php";
$db = new \db\database();


$form_data = $_POST;
//print_r($form_data);
$error = [];
if (!empty($_POST)) {
    if(!empty($form_data['username']) && (!empty($form_data['password']))) {
        $password = hash('sha256', $form_data['password']);
        // Check if user exists
        $user_exists = $db->query(
            'SELECT * FROM users WHERE users.username = \''. $form_data['username'] . '\''
        );
        if(!empty($user_exists[0])) {
            // Check mdp
            if($password == $user_exists[0]->password) {
                $user = array(
                    'id' => $user_exists[0]->id,
                    'connected' => true,
                    'username' => $user_exists[0]->username,
                    'name' => $user_exists[0]->name,
                    'profile_pic' => $user_exists[0]->profile_pic,
                    'rank' => $user_exists[0]->rank,
                    'email' => $user_exists[0]->email,
                );
                $db->exec(
                    'UPDATE users set last_connection = \'' . date('Y-m-d H:i:s') . '\', last_ip = \'' . $_SERVER['REMOTE_ADDR'] . '\' WHERE id = \'' . $user_exists[0]->id . '\''
                );

                $success = true;
                header('Location: /tpe/profile');
            } else {
                $error['invalid_password'] = 'Mot de passe erroné';
                header('Location: /tpe/login');
            }
        } else {
            $error['user_not_exists'] = 'L\'utilisateur demandé n\'existe pas !';
            header('Location: /tpe/login');
        }
    } else {
        $error['not_full'] = 'Formulaire non complet';
        header('Location: /tpe/login');
    }
} else {
    $error['wrong_method'] = 'Méthode non accordée';
    header('Location: /tpe/login');
}
$_SESSION['login_error'] = $error;
$_SESSION['login_success'] = $success;
$_SESSION['user_infos'] = $user;
