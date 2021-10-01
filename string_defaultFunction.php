<!-- string builtin function -->
<?php
    $s = "</br>";
    $x = "Hi there";
    $y = " where are you";
    
    echo strlen($x);
    echo $s;

    echo str_word_count($x);
    echo $s;

    echo strrev($x);
    echo $s;

    echo strpos($x, "there");
    echo $s;

    echo str_replace("there", "Jhon", $x);
    echo $s;
    
    echo $x . $y;
?>
