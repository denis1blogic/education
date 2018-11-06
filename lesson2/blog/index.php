<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.11.2018
 * Time: 20:48
 */

session_start();

if (isset($_POST['remember'])){

    //setcookie('login','admin', time() + 3600);
    //setcookie('pwd','qwerty', time() + 3600);
}

if (isset($_SESSION['auth']) || ($_COOKIE['login'] == 'admin' && $_COOKIE['pwd'] == 'qwerty')){
    $privet = '<div style="color: red;">ADMIN!!!</div>';

}else{
    $privet = '<div style="color: green;">USER!!!</div>';
    header("Location: login.php");
}

if (isset($_POST['exit'])){
    unset($_SESSION['auth']);
    unset($_COOKIE['login']);
    unset($_COOKIE['pwd']);
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php

    $news = scandir('data');

    foreach ($news as $one) {
        if(is_file("data/$one")){
            echo "<a href=\"article.php?filename=$one\">$one</a><br><hr>";
        }
    }

?>
<a href="add.php">Add new file</a>
<br><hr>

<form method="post" id="exit">
    <input type="submit" name="exit" value="Exit">

</form>


<hr>
</body>
</html>
