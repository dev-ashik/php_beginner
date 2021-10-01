
<form action="<?php  echo $_SERVER['PHP_SELF']?>" method="post">  
<!-- method="get" it will show in top but method="post" is not show -->
    Username: <input type="text" name="username">
    <input type="submit" value="submit">
</form>

<?php 
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $name = $_REQUEST['username'];
        if(empty($name)){
            echo "<span style='color:red'>Username must not be empty !!</span>";
        }else{
            echo "<span style='color:green'>You have submitted: ".$name."</span>";
        }
    }

?>
