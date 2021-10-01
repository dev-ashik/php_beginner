<!-- this file can be ".html" or ".php" -->
<form action="get.php" method="GET">
    <input type="text" name="username">
    <input type="submit" value="submit">
</form>
<?php
    if($_SERVER["REQUEST_METHOD"] == 'GET'){
        $name = $_GET['username']; // first time username is not set. that's why error. to fix that error we can use another file
        echo $name;
    }
    
?>