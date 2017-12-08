<?php
/**
 * Created by PhpStorm.
 * User: simonb
 * Date: 08/12/2017
 * Time: 09:26
 */
function get_lang($key) {
    if($_COOKIE['lang'] == 'en') {
        $lang_file = json_decode(file_get_contents('../data/lang/en.json'));
    } else { // Par défaut on va chercher le fichier français
        $lang_file = json_decode(file_get_contents('../data/lang/fr.json'));
    }

    if(array_key_exists($key, $lang_file)) {
        return $lang_file->$key;
    } else {
        return $key;
    }

}