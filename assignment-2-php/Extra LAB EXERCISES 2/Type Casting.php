<?php
    $intvalue = 42;
    var_dump($intvalue);
    echo "<br>";

    echo "convert int to string: ";
    echo "<br>";
    
    $stringvalue = (string)$intvalue;
    var_dump($stringvalue);

    echo "<br>";
    $floatvalue = 15.45;
    var_dump($floatvalue);

    echo "<br>";
    echo "convert float to int: ";
    
    echo "<br>";
    $intvalue = (int)$floatvalue;
    var_dump($intvalue);

?>