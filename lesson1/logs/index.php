<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.11.2018
 * Time: 20:20
 */

$info = [
    date("Y-m-d H:i:s"),
    $_SERVER['REQUEST_URI'],
    $_SERVER['HTTP_REFERER'],
    $_SERVER['REMOTE_ADDR'],
    $_SERVER['HTTP_USER_AGENT']
];

$to_save = implode('@-@', $info);

/*$f = fopen('log.txt', 'a+');

fwrite($f, $to_save . "\n");

fclose($f);*/


file_put_contents('log.txt', $to_save . "\n", FILE_APPEND);
