
<?php
    $number1 = 4;
    $number2 = 10;

    echo $number1 + $number2."<br>";
    function sum(){

        // echo $number1 + $number2;
        $GLOBALS['total'] = $GLOBALS['number1']+$GLOBALS['number2'];
    }
    sum();
    echo $total;
    
?>
