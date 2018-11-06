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

    $fname = (isset($_GET['filename']) && strlen($_GET['filename']) > 0) ? $_GET['filename'] : '';
    $text = ($fname != '' && file_exists("data/$fname") && is_file("data/$fname")) ? file_get_contents("data/$fname") : '404';

    echo "<h1>$fname</h1>";
    echo "<div>$text</div>";


?>
<a href="index.php">Back</a>
<hr>
<a href="edit.php?filename=<?=$fname; ?>">Edit</a>
</body>
</html>


