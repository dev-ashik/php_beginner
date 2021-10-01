<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-size: 40px;
            background-color: #ddd;
            margin: 0px 100px 0px 100px;
        }
        
    </style>
</head>
<body>
    <?php
        // current url "$_SERVER"
        echo $_SERVER['PHP_SELF'];
                echo "</br>";

        // server name
        echo $_SERVER['SERVER_NAME'];
                echo "</br>";

        // browser name
        echo $_SERVER['HTTP_USER_AGENT'];
                echo "</br>";

        echo $_SERVER['SERVER_ADDR'];
        echo "</br>";
    ?>
</body>
</html>