<?php
$title = "For loop";
include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <?php 
        //loops
        for($count=0; $count<10; $count++){
            echo '<p>Hola mundo</p>';
        }

        for ($count=0; $count<10; $count++){
            echo "<p>La cuenta es: $count</p>";
        }
    ?>

    <?php require 'includes/footer.php' ?>