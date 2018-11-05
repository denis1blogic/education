<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.11.2018
 * Time: 20:49
 */


?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php

    $fname = $_GET['filename'];
    $text = file_get_contents("data/$fname");

    echo "<h1>$fname</h1>";
    echo "<div>$text</div>";


?>
<a href="index.php">Back</a>
</body>
</html>


