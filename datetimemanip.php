<?php
$title = "Date and time"; 
include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>

    <?php 
    $datenow = getdate();
    echo "Hoy es dia: <br/>";
    echo $datenow ['mday']. '<br/>';
    echo $datenow ['mon']. '<br/>';
    echo $datenow ['year']. '<br/>';

    echo "Hoy es: ". $datenow['mon']. '/' . $datenow['mday']. '/' . $datenow['year']. '<br/>';   

    echo time();
    
    print date("m/d/y G.i:s<br>", time()). '<br/>';
    print "Hoy es:  ";
    print date("j of F Y, \a\\t g.i a", time());
    
    ?>    


    <?php require 'includes/footer.php' ?>