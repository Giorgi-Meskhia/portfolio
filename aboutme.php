<?php
include('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- header -->
    <?php
     getHeader()
    ?>

    <!-- about me -->
    <?php
     echo getAboutMe();
    ?>



    <!-- footer -->
    <?php
    getFooter()
    ?>
</body>
</html>