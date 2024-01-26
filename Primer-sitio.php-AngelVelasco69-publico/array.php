<?php
$title = "Arrays"; 
include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1  >

    <?php 
        //Variable A
        $num = 3;
        //Un arreglo
        $numbers = array(1,2,3,4,5,6,7,8,9,10,45,57,46,23,21,67,89);
        echo $numbers[5];
        echo "<p>$numbers[9]</p>";
        $size = count($numbers);
        echo "<p>El tamaño del numero del arreglo es: $size </p>";

        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }
    
    ?>


    <?php require 'includes/footer.php'?>