
<form method="GET">
    <input type="text" name="person">
    <button>SUBMIT</button>
</form>

<?php

    $welcome = "Welcome ";
    echo $welcome; 

    $name = $_GET['person'];
    echo $name;
    
?>