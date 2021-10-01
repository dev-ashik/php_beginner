<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0 auto;
            text-align: center;
        }
        section {
            background-color: #cdc5e0;
            width: 1000px;
            margin: 0 auto;
        }
        .Top_bottom {
            background-color: #aaaddd;
            height: 60px;
            font-size: 40px;
        }
        .body {
            height: 500px;
        }
    </style>
</head>
<body>
<section>
    <div class="Top_bottom">Boolean</div>
    <div class="body">

    <?php
    $b = "</br>";
    // -1 is considered true, like any other non-zero (whether negative or positive) number! 


    $show_separators = TRUE;
    //$show_separators = false;

    // this is not necessary...
    if ($show_separators == TRUE) {
        echo "True"; echo $b;
    }else{
        echo "False"; echo $b;
    }

    // ...because this can be used with exactly the same meaning:

    if ($show_separators) {
        echo "True"; echo $b;
    }else{
        echo "False"; echo $b;
    }


    echo $b;echo $b;

    // converting to boolean
    
    var_dump((bool) 1);    echo $b;     // bool(true)
    var_dump((bool) 0);    echo $b;    // bool(true)
    var_dump((bool) -2);   echo $b;     // bool(true)
                    // -1 is considered true, like any other non-zero (whether negative or positive) number!

    var_dump((bool) "");     echo $b;   // bool(false)
    var_dump((bool) "foo");   echo $b;  // bool(true)

    var_dump((bool) 2.3e5);   echo $b;  // bool(true)
    var_dump((bool) array(12));  echo $b; // bool(true)
    var_dump((bool) array());   echo $b; // bool(false)
    var_dump((bool) "false");   echo $b; // bool(true)

    ?>
</div>
<div class="Top_bottom bottom">Ashik</div>
</section>
</body>
</html>