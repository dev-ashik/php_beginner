
<?php
    $names = array("Ashik", "Masum", "Esha", "Hashan");
    
    // sort use to sorting order.
    sort($names);
    $len = count($names);

    for($i=0; $i<$len; $i++){
        echo $names[$i];
        echo "</br>";
    }
?>