

<form action="./header.php" method="post">
    <input type="text" name="location" placeholder='location'><br>
    <input type="submit" value='Submit'>
</form>

<?php
    if(isset($_REQUEST['text'])){
        $WrongLocation = $_REQUEST['text'];
        echo $WrongLocation;
    }
    
?>