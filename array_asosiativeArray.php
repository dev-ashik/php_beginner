
<?php
    $arr = array("Jhon"=>"23", "Max"=>"24", "Ashik"=>"23");

    $arr["Mahmud"] = "26";

    foreach($arr as $x => $value){
        echo $x. " age: ".$value;    echo "</br>";
    }

?>
