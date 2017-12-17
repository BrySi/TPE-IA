<?php
/**
 * Created by PhpStorm.
 * User: SIMON
 * Date: 17/12/2017
 * Time: 16:18
 */
$data = file_get_contents('php://input');
//var_dump($data);
file_put_contents('data/audio/test.ogg', $data);

