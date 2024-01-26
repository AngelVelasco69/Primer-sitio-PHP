<?php
$title = "Functions";
include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <?php
    //Definir función
    function writeMsg() {
        echo "Eres una buena persona, ten buen dia!". '<br/>';
    }
    //Llamar a función
    writeMsg();
   
    echo "<hr/>";

    writeMsg();

    function addfunction($num1, $num2) {
        $sum = $num1 + $num2;
        echo "La suma de $num1 y $num2 es: $sum". '<br/>';
    }
    function changeNum($num) {
        $num = $num + 10;
    }

    function returnproduct($num1, $num2) {
        $product = $num1 * $num2;
        return $product;
    }

    $num = 500;
    addfunction(5, 10);
    addfunction(10, $num);
    addfunction(89, 34);

    changeNum($num);
    echo "El nuevo valor de la variable es: $num". '<br/>';

    $return_value = returnproduct(5, 10);
    echo $num. '<br/>';
    ?>
    
    <?php require 'includes/footer.php' ?>