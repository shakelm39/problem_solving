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
     <!-- problem #2 solution printing odd number less than 100  -->
     <h2>Solution #2 Printing Odd Number Less than 100</h2>
     <?php 
        for ( $i = 1; $i <= 100; $i++ ){
            if( $i%2== 0){
                
            }else{
                echo"<li>";
                echo "The Odd Number Is: ". $i;
                echo "</li>";
            }
        }
       
     ?>
     <!-- problem #2 solution printing odd number less than 100  -->
     <!-- problem #3 solution printing the multiplication table with 7 -->
      <h2>Printing the multiplication table with 7</h2>
      <?php 
        for( $i = 1; $i <= 10; $i++ ){
            echo "7 x ".$i." = ".$i*7;
            echo "<br>";
        }
      ?>
     <!-- problem # solution printing the multiplication table with 7  -->
</body>
</html>