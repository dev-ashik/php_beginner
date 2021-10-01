   <?php

    $b = "</br>";
    $var = 'Bob';
    $Var = 'Joe';
    echo "$var, $Var";      // outputs "Bob, Joe"

    //$4site = 'not yet';     // invalid; starts with a number
    $_4site = 'not yet';    // valid; starts with an underscore
    $täyte = 'mansikka';    // valid; 'ä' is (Extended) ASCII 228.
    echo $b;

    $foo = 'Bob';              // Assign the value 'Bob' to $foo
    $bar = &$foo;              // Reference $foo via $bar.
    $bar = "My name is $bar";  // Alter $bar...
    echo $bar;
    echo $foo;                 // $foo is altered too.


    echo "<br><br>";
    // Assignment Operators by using "=" we can assign value 
    $variable = 20;
    echo "variable = ". $variable;


    ?>
