<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.11.2018
 * Time: 20:20
 */

//s$str = file_get_contents('log.txt');
$str = file('log.txt');

echo '<table>';

foreach ($str as $item) {
        echo '<tr>';

        $info = explode('@-@', $item);

        foreach ($info as $item) {
            echo '<td>';
                echo $item;
            echo '</td>';
        }

        echo '</tr>';
}

echo '</table>';

//var_dump($str);