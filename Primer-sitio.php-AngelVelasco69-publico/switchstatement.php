<?php 
$title = "Switch statement";
include 'includes/header.php'
?>
     <h1><?php echo $title ?></h1>
     <?php
        $grade = 'A';
        switch($grade){
            case 'A':
                echo '<h2 style = "color : gold">Excelentee!!</h2>';
                break;
            case 'B':
                echo '<h2 style = "color : green">Muy bien!</h2>';
                break;
            default:
                echo '<h2 style = "color : red">¿Eres tonto?</h2>';
                break;
        }
     
     ?>
    <?php require 'includes/footer.php' ?>