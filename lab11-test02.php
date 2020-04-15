<?php
include 'lab11-test02.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>  
    <title>Lab 11</title>   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,800" rel="stylesheet">    
    <link rel="stylesheet" href="css/lab11-test02.css">
</head>
<body>
<main class="container">
    <div class="grid-container">
       
            <?php
                generateBox(1, "Starter");
                generateBox(3, "Developer");
                generateBox(10, "Professional");
                generateBox(50, "Enterprise");

            ?>
            

    </div>
</main>   
</body>
</html>