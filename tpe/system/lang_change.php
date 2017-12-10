<?php
/**
 * Created by PhpStorm.
 * User: SIMON
 * Date: 10/12/2017
 * Time: 18:52
 */
$lang = $_GET['force'];
if($lang == 'en' || $lang = 'fr') {
    setcookie('lang', $lang, mktime(0,0,0,3,7,2080,0), '/tpe');
    header('Location:' . $_SERVER['HTTP_REFERER']);
} else {
    setcookie('lang', 'en', mktime(0,0,0,3,7,2080,0), '/tpe');
    header('Location:' . $_SERVER['HTTP_REFERER']);
}