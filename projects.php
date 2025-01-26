<?php
include('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects-Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <?php
    getHeader()
    ?>
    
    <!-- projects -->
    <?php

    $projects = include 'data.php';

    getProjects($projects);
    ?>


    <!-- footer -->
    <?php
    getFooter()
    ?>
</body>
</html>