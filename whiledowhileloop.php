<?php 
$title = "While do while";
include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <?php 
        $grade = 0;
        //Bucle infinito
        //  while($grade < 10){
        //      echo '<p>Tengo menos de 10!</p>';
        //}
        //Pre-condicion
        while($grade < 10){
            echo '<p>Tengo menos de 10!</p>';
            $grade++;
        }
        echo 'Salir del bucle';
    ?>  
    
    
    <h1>Do-While loop</h1> 
    <?php 
    //bucle posterior a la condición
    $grade = 0;
    do{
        echo '<p>Tengo menos de 10!</p>';
        $grade++;
    }while($grade < 10);
         echo 'Salir del bucle';
    
    
    ?>

    <?php require 'includes/footer.php' ?>