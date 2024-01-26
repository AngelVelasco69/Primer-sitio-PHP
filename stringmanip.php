<?php 
$title = "String manipulation";
include 'includes/header.php'
?>
    <?php 
    $phrase1 = "El estudiante que llego tarde ";
    $phrase2 = "En clase, estaba como piedra";
    $name = "angel reyes";
    echo $phrase1. " llamado Carlos " . $phrase2;
    echo '<br/>';
    echo '<hr/>';
    //transformacion del string
    echo 'Primera letra mayuscula:  '. ucfirst($name). '<br/>';  
    echo 'Primera letra mayuscula de cada palabra:  '. ucwords($name). '<br/>';  
    echo 'Letras Mayusculas: '.strtoupper($name). '<br/>';
    echo 'Letras Minusculas: '.strtolower("Estas son todas en minusculas: "). '<br/>';
    echo '<hr/>';
    echo 'Repeat String: '. str_repeat('a',10). '<br/>';
    echo 'Repeat String: '. strtoupper(str_repeat('a',10)) . '<br/>';
    echo 'Get a Substring: '. substr($name, 5, 10). '<br/>';

    echo 'get position of string: '. strpos($name,'W'). '<br/>';   
    //Regresar al NULL
    echo 'Find Character "R": ' . strchr($name, 'R'). '<br/>';
    echo 'Find Character "r": ' . strchr($name, 'r'). '<br/>';
    echo 'Find Character "s": ' . strchr($name, 's'). '<br/>';
    echo 'Find Character "e": ' . strchr($name, 'e'). '<br/>';

    echo 'Find length of string: '. strlen($name).'<br/>';

    echo 'Without Trim: '. "A" . "B C D" . "E". '<br/>';
    echo 'Trim spaces on both sides: '. "A" . trim("B C D") . "E". '<br/>';
    echo 'Trim spaces to the left: '. "A" . ltrim("B C D") . "E". '<br/>';
    echo 'Trim spaces to the right: '. "A" . rtrim("B C D") . "E". '<br/>';

    echo ' replace string with another: '. str_replace("stand", "sit", $phrase2 ). '<br/>';

    ?>
    
    <?php require 'includes/footer.php' ?>