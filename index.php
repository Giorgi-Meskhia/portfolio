<?php
include('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
<!-- Header -->
    <?php
     getHeader()
    ?>

     <!-- main page function -->

     <?php
    getPortfolioPage()
    ?>
    
    <!-- footer -->
    <?php
      getFooter() 
    
    ?>
</body>
</html>