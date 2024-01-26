<?php

$title = "Index"; 
include 'includes/header.php'
?>
    <!--- BASIC HTML--->
    <h1> Hello HTML - PHP primer</h1>
    <br/>
    <?php

        //Escribiendo en HTML usando echo
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'second line';

        echo '<br/>';
        //Declaro varible con el signo $
        $name = 'Angel Reyes';
        $age = '19 años';
        //Imprimo varible
        echo $name; 
        echo '<h1> Mi nombre es: '.$name.' <h1>';
        echo '<h1> Mi edad es: '.$age.' <h1>';
        echo '<br/>';
        //el echo usando la interpolacion
        
        
    ?>
    <button type="button" class="btn btn-dark">Hola</button>
    <button type="button" class="btn btn-success">como</button>
    <button type="button" class="btn btn-primary">estas!!</button>
    <a href="https://www.heroku.com" button type="button" class="btn btn-primary">Heroku!</a>
    
    <?php 
    require 'includes/footer.php' ?>
