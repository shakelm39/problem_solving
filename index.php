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
     <!-- problem #3 solution printing the multiplication table with 7  -->
     <!-- problem #4 solution printing the multiplication table with 1 to 10  -->
     <h2>Printing the multiplication tables with numbers from 1 to 10</h2>
     <?php 
        for($i=1; $i <=10; $i++ ){
            echo "<br>";
            echo "Multiplication Number for $i";
            echo "<br>";
            
            for($j=1; $j <=10; $j++ ){
               
                echo $i. " x ".$j." = ".$i*$j;
                echo "<br>";
                
            }
            
        }
     ?>
     <!-- problem #4 solution printing the multiplication table with 1 to 10  -->
     <!-- problem #5 solution printing the sum of  1 to 10  -->
      <h2>Sum of numbers from 1 to 10</h2>
      <?php 
        $sum = 0;
        for($i=1; $i <=10; $i++ ){
            $sum = $sum+$i;
        }
        echo "The sum of numbers from 1 to 10 is: ".$sum;
      ?>
     <!-- problem #5 solution printing the sum of  1 to 10  -->
     <!-- problem #6 solution printing 10!  -->
      <h2>factorial 10</h2>
      <?php 
        $factorial = 1;
        for($i=1; $i <=10; $i++ ){
            $factorial = $factorial * $i;
        }
        echo "The factorial 10 is: ".$factorial;
      ?>
     <!-- problem #6 solution printing 10!  -->
     
</body>
</html>