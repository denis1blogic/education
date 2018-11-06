<?php


	session_start();

	if ($_COOKIE['login'] == 'admin' && $_COOKIE['pwd'] == 'qwerty'){
	    header("Location: index.php");
    }

	if(count($_POST) > 0){

        if($_POST['login'] == 'admin' && $_POST['pwd'] == 'qwerty'){
            $_SESSION['auth'] = true;
            // если стоит галочка
            setcookie('login','admin');
            setcookie('pwd','qwerty');

            header('Location: index.php');
            exit();
        }
    }
    else{
        unset($_SESSION['auth']);
    }
?>
<form method="post" id="f1">
	Логин<br>
	<input type="text" id="login" name="login" value="admin"><br>
	Пароль<br>
	<input type="text" id="pwd" name="pwd" value="qwerty"><br>
	<input type="checkbox" name="remember">Запомнить меня
	<input type="submit" value="Войти">
</form>