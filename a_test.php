<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="username">
    <input type="submit" value="submit">
</form>

<?php
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $name = $_POST['username'];
        echo $name;
    }
    
?>