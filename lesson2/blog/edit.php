<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.11.2018
 * Time: 21:06
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($_POST) > 0){

    $title = trim($_POST['title']);
    $title_old = (isset($_GET['filename'])) ? trim($_GET['filename']) : '';
    $content = trim($_POST['content']);
    $error = '';

    if ($title == '' && $content == ''){
        $error .= "Fields is Empty!";
    }elseif (!is_numeric($title)){
        $error .= "Title need to Numbers!";
    }elseif (file_exists("data/$title") && is_file("data/$title") && $title != $title_old){
        $error .= "File with this name Exist!";
    }else{
        //unlink("data/$title");
        unlink("data/$title_old");
        file_put_contents("data/$title", $content);
        header("Location: index.php");
        exit();
    }

}else{

    $title = (isset($_GET['filename']) && strlen($_GET['filename']) > 0) ? $_GET['filename'] : '';
    $content = ($title != '' && file_exists("data/$title") && is_file("data/$title")) ? file_get_contents("data/$title") : '404';
    $error = '';

}

?>



<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>



<form id="f1" method="post">
    Edit filename<br>
    <input type="text" id="title" name="title" value="<?=$title; ?>"><br><hr>

    Edit content<br>
    <textarea id="content" name="content"><?=$content; ?></textarea><br><hr>

    <input type="submit" value="Save">
</form>

<div style="color: red"><?=$error; ?></div>

</body>
</html>

