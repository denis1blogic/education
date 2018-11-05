<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.11.2018
 * Time: 20:48
 */
s

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
            echo "<a href=\"article.php?filename=$one\">$one</a><br>";
        }
    }

?>
<a href="add.php">Add new file</a>
</body>
</html>
