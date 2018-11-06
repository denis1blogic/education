<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.11.2018
 * Time: 20:49
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($_POST) > 0){

    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $error = '';

    if ($title == '' && $content == ''){
        $error .= "Fields is Empty!";
    }elseif (!is_numeric($title)){
        $error .= "Title need to Numbers!";
    }elseif (file_exists("data/$title") && is_file("data/$title")){
        $error .= "File Exist!";
    }else{
        file_put_contents("data/$title", $content);
        header("Location: index.php");
        exit();
    }

}else{

    $title = '';
    $content = '';
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
        Filename<br>
        <input type="text" id="title" name="title" value="<?= $title; ?>"><br>
        Content<br>
        <textarea id="content" name="content"><?= $content; ?></textarea><br>
        <input type="submit" value="Save"><br>
    </form>
    <div style="font-size: 16px; color: red"><?= $error; ?></div>
</body>
</html>