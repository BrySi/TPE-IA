<?php
/**
 * Created by PhpStorm.
 * User: simonb
 * Date: 08/12/2017
 * Time: 09:26
 */
function set_lang() {
    if(empty($_COOKIE['lang'])) {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        setcookie('lang', $lang, mktime(0,0,0,3,7,2080,0), '/tpe');
    }
}

function get_lang($key) {
    if($_COOKIE['lang'] == 'en') {
        $lang_file = json_decode(file_get_contents('/home/brysflgp/tpe.brysi.xyz/tpe/data/lang/en.json'));
    } else { // Par défaut on va chercher le fichier français
        $lang_file = json_decode(file_get_contents('/home/brysflgp/tpe.brysi.xyz/tpe/data/lang/fr.json'));
    }

    if(array_key_exists($key, $lang_file)) {
        return $lang_file->$key;
    } else {
        return $key;
    }

}