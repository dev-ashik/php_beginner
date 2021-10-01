<?php
    $_site = $_REQUEST["location"];

    if($_site=="google"){
         header("location: https://www.google.com");
    }else if ($_site=="bing"){
        header("location: https://www.bing.com");
    }else{
        header("location: ./form.php?text=url not found."); // after '?' mark, we can pass data.
    }

?>