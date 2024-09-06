
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
for ( $i = 1; $i <= 10; $i++ ) {
    echo "<li>";
    echo $i;
    echo "</li>";
}
?>
     </ul>
    <!-- problem #1 solution -->
     <!-- problem #2 solution printing odd number less than 100  -->
     <h2>Solution #2 Printing Odd Number Less than 100</h2>
     <?php
for ( $i = 1; $i <= 100; $i++ ) {
    if ( $i % 2 !== 0 ) {
        echo "<li>";
        echo "The Odd Number Is: " . $i;
        echo "</li>";
    }
}

?>
     <!-- problem #2 solution printing odd number less than 100  -->
     <!-- problem #3 solution printing the multiplication table with 7 -->
      <h2>Printing the multiplication table with 7</h2>
      <?php
for ( $i = 1; $i <= 10; $i++ ) {
    echo "7 x " . $i . " = " . $i * 7;
    echo "<br>";
}
?>
     <!-- problem #3 solution printing the multiplication table with 7  -->
     <!-- problem #4 solution printing the multiplication table with 1 to 10  -->
     <h2>Printing the multiplication tables with numbers from 1 to 10</h2>
     <?php
for ( $i = 1; $i <= 10; $i++ ) {
    echo "<br>";
    echo "Multiplication Number for $i";
    echo "<br>";

    for ( $j = 1; $j <= 10; $j++ ) {

        echo $i . " x " . $j . " = " . $i * $j;
        echo "<br>";

    }

}
?>
     <!-- problem #4 solution printing the multiplication table with 1 to 10  -->
     <!-- problem #5 solution printing the sum of  1 to 10  -->
      <h2>Sum of numbers from 1 to 10</h2>
      <?php
$sum = 0;
for ( $i = 1; $i <= 10; $i++ ) {
    $sum += $i;
}
echo "The sum of numbers from 1 to 10 is: " . $sum;
?>
     <!-- problem #5 solution printing the sum of  1 to 10  -->
     <!-- problem #6 solution printing 10!  -->
      <h2>Factorial 10</h2>
      <?php
        $factorial = 1;
        for ( $i = 1; $i <= 10; $i++ ) {
            $factorial *= $i;
        }
        echo "The factorial 10 is: " . $factorial;
        ?>
     <!-- problem #6 solution printing 10!  -->
     <!-- problem #7 solution Calculate the sum of odd numbers greater than 10 and less than 30  -->
      <h2>Calculate the sum of odd numbers greater than 10 and less than 30</h2>
      <?php
        $odd_sum = 0;
        for ( $i = 11; $i < 30; $i++ ) {

            if ( $i % 2 !== 0 ) {
                $odd_sum += $i;
            }

        }
        echo "The sum of odd numbers is : " . $odd_sum;
?>
     <!-- problem #7 solution Calculate the sum of odd numbers greater than 10 and less than 30  -->
     <!-- problem #8 solution converting from Celsius to Fahrenheit  -->
      <h2>Converting from Celsius to Fahrenheit</h2>
      <?php
function celsiusTofahrenheit( $celsius ) {
    $farhenheit = ( $celsius * 9 / 5 ) + 32;
    return $farhenheit;
}
$celsiusTemperature = 25;
$fahrenheitTemperature = celsiusTofahrenheit( $celsiusTemperature );
echo "$celsiusTemperature °C is equal to $fahrenheitTemperature °F.";
?>
     <!-- problem #8 solution converting from Celsius to Fahrenheit  -->
     <!-- problem #9 solution converting from Fahreheit to Celsius  -->
      <h2>Converting from Fahrenheit to Celsius</h2>
      <?php
function fahrenheitTocelsius( $fahrenheit ) {
    $celsius = ( $fahrenheit - 32 ) * 5 / 9;
    return $celsius;
}
$fahrenheit = 77;
$celsius = fahrenheitTocelsius( $fahrenheit );
echo "$fahrenheit °C is equal to $celsius °F.";
?>
     <!-- problem #9 solution converting from Fahreheit to Celcius  -->
     <!-- problem #10 solution Calculate the sum of numbers in an array of numbers  -->
      <h2>Calculate the sum of numbers in an array of numbers</h2>
      <?php

        function sumArray( $numbers ) {
            $sum = 0;
            foreach ( $numbers as $number ) {
                $sum += $number;
            }
            return $sum;
           
        }
        $numbers = [1, 2, 3, 4, 5];
        $sum = sumArray( $numbers );

        echo "The sum of the numbers in the array is : ".$sum;
     ?>
     <!-- problem #10 solution Calculate the sum of numbers in an array of numbers  -->
     <!-- problem #11 solution Calculate the average of the numbers in an array of numbers  -->
      <h2>Calculate the average of the numbers in an array of numbers</h2>
      <?php

        function averageArray( $numbers ) {

            $sum = 0;
            
            foreach ( $numbers as $number ) {
                $sum += $number;
            }

            $count = count( $numbers );

            if($count >0){
                $average = ( $sum / $count );
            }else{
                $average = 0;
            }
            return $average;
        }

        
        $numbers = [20, 20, 100, 40, 50];
        $average = averageArray( $numbers );

        echo "The sum of the numbers in the array is : ".$average;
     ?>
     <!-- problem #11 solution Calculate the average of the numbers in an array of numbers  -->
     
     <!-- problem #12 solution Create a function that receives an array of numbers and returns an array containing only the positive numbers  -->
      <h2>Create a function that receives an array of numbers and returns an array containing only the positive numbers</h2>
      <?php 

        function filterPositiveArray( $numbers ) {
            $positiveNumber = [];
            
            foreach($numbers as $number){
                if($number >0){
                    $positiveNumber[] = $number;
                }
                 
            }
            return $positiveNumber;
            
        }
        $numbers = [1, 2,-5, 3, -10, 6];
        $positiveNumber = filterPositiveArray( $numbers );
        print_r ($positiveNumber);
        
      ?>
     <!-- problem #12 solution Create a function that receives an array of numbers and returns an array containing only the positive numbers  -->
     <!-- problem #13 solution Print the first 10 Fibonacci numbers without recursion -->
      <h2>Print the first 10 Fibonacci numbers without recursion</h2>
      <?php 
        function printFibonacci($n){
            $a = 0;
            $b = 1;

            for($i=1; $i < $n-1; $i++){
                $next = $a + $b;
                print($next);
                $a = $b;
                $b = $next;
               
            }
            
        }
        print ( printFibonacci(10));
      ?>
     <!-- problem #13 solution Print the first 10 Fibonacci numbers without recursion -->




</body>
</html>