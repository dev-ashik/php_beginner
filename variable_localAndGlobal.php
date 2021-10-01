
<?php
    $x = 15;

    function test1(){
        global $x;  // because x is a global variable
        $a = 20;
        echo "a = ".$a;
        echo "<br>";
        echo "Inside test1 function x = ".$x;
        echo "</br>";

    }

    function test2(){
        global $x;  // because x is a global variable
        $b = 30;
        echo "b = ".$b;
        echo "</br>";
        echo "Inside test2 function x = ".$x;
        echo "</br>";
    }

    test1();
    test2();

?>
