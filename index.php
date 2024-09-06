<?php include_once('problems.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem Solving PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    
    <!-- problem #1 solution printing (1 to 10) -->
     <h2>Solution #1 Printing 1 to 10</h2>
     <ul>
     <?php 
        for( $i = 1; $i <= 10; $i++ ){
            echo "<li>";
            echo $i;
            echo"</li>";
        }
     ?>
     </ul>
    <!-- problem #1 solution -->
</body>
</html>