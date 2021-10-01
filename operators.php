<!-- operators -->
<?php
    $x = 10;
    $y = 5;
    $space = "</br>";
    

    // 1. Assignment Operators
    echo "Assignment Operators <br>";

    $x = 20;
    echo "x = ". $x;    echo $space;


    // 2. arithmetic operators (+, -, *, /, %) 
    echo "<br>Arithmetic operators <br>";

    echo "x + y = ".$x + $y;   echo $space;// line break
    /*
    echo "x - y = ".$x - $y;   echo $space; 
    echo "x * y = ".$x * $y;   echo $space;
    echo "x / y = ".$x / $y;   echo $space;
    echo "x % y = ".$x % $y;   echo $space;
    */

    

    //3. comparison operators ("==", "===", "!=", !===, ">", "<", ">=", "<=" double equal check only value, "===", "!==" check value and data type.)
    echo "<br>Comparison operators <br>";

    $p = 10;
    $q = '10';

    if($p == $q){ // double equal check value
        echo "They are equal. <br>";   
    }else{
        echo "They are not equal.<br>";
    }

    if($p === $q){ // treple equal check valeu and data type
        echo "They are equal.<br>";
    }else{
        echo "They are not equal.<br>";
    }
    

    //4. Increment/ Decrement operatrs (pre ++s, --s  post s++, s--)
    echo "<br>Increment/ Decrement operators <br>";

    ++$p;
    /*
    --$p;
    $p++;
    $p--;
    */
    echo $p;    echo $space;



    //5. Logical operators (and(&&), or(||), not(!=)(not"<>"), "xor" only one condition have to be true.)
    echo "<br>Logical operators <br>";

    $m = 50;
    
    if($m > 10 && $m < 20){
        echo "True<br>";
    }
    elseif($m == 10 || $m == 20){
        echo "10 or 20<br>";
    }
    else{
        echo "False<br>";
    }


    $n = 100;
    if($m == 50 xor $n == 100){ // when only one conditin true.
        echo "xor<br>";
    }else{
        echo "not xor<br>";
    }


    //6. String Operators
    echo "<br>String operators <br>";

    $string1 = "hello";
    $string2 = "everyone";
    echo $string1 . $string2; echo $space;
    //7. array operators


?>
