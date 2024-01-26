<?php 
$title = "If statement";
include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <?php
        //uso del if
        echo '<h2>If Statement</h2>';
        $grade = 70;
        if($grade >= 50){
            echo  '<h3 style = "color : green">Has aprobado!!</h3>';
        }
        else{
            echo'<h3 style = "color : red">Has reprobado!!</h3>';
        }  
        $grade = 'A';
        //if else - if else
        if($grade == 'A'){
            echo '<h2 style = "color : gold">Excelentee!!</h2>';
        }
        elseif($grade=='B'){
            echo '<h2 style = "color : green">Muy bien!</h2>';
        }
        else{
            echo '<h2 style = "color : red">¿Eres tonto?</h2>';
        }

    ?>
    
    <?php require 'includes/footer.php' ?>