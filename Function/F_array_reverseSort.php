
<?php
    $numbers = array(12, 34, 54, 24, 3);

    $len = count($numbers);
    // sort in reverse order
    rsort($numbers);

    for($i=0; $i<$len; $i++){
        echo $numbers[$i]." ";
        
    }
    echo "</br>";
    

    //________________________________

    $students = array("Anik"=>"23", "Najmul"=>"29", "Siam"=>"25");

    //asort  to sorting by value 
    asort($students);

    // ksort to sorting by key
    // ksort($students);

    foreach($students as $key => $value){
        echo "Key = ".$key." value = ".$value;
        echo "</br>";
    }


?>
