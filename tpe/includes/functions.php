<?php
/**
 * Created by PhpStorm.
 * User: simonb
 * Date: 08/12/2017
 * Time: 09:26
 */
public function get_lang($key) {
    if($_COOKIE['lang'] = 'en') {
        $lang_file = json_decode(file_get_contents('../data/lang/en.json'));
    } else { // Par défaut on va chercher le fichier français
        $lang_file = json_decode(file_get_contents('../data/lang/fr.json'));
    }
    return $lang_file->$key;
}