

    <?php
        // four scalar types
        $a_bool = true;
        $a_str = "hello";
        $an_int = 12;
        $a_float = 34.4;

        //to check type "gettype()" function
        echo gettype($a_bool);  echo "</br>";
        echo gettype($a_str);    echo "</br>";
        echo gettype($an_int);    echo "</br>";
        echo gettype($a_float);    echo "</br>";

        // to check type by true(1) false "is_type" function
        echo is_int($an_int);     echo "</br>";
        echo is_string($a_str);   echo "</br>";

        if(is_string($a_str)){
            echo("is string.");    echo "</br>";
        }

        echo "</br></br>";

        function testFunc() { }

        class testClass {
        
            public function __invole() { }
        
            public static function testStaticMethod() { }
        
            public function testMethod() { }
        }

        $o = new testClass();
        $lambda = function() { };

        $c1 = 'testFunc';
        $c2 = ['testClass', 'testStaticMethod'];
        $c3 = [$o, 'testMethod'];
        $c4 = $lambda;
        $c5 = $o;

        // to check type "ver_dump()" is very useable
        var_dump(is_callable($c1));   echo "</br>"; // TRUE
        var_dump(is_callable($c2));   echo "</br>"; // TRUE
        var_dump(is_callable($c3));   echo "</br>"; // TRUE
        var_dump(is_callable($c4));   echo "</br>"; // TRUE
        var_dump(is_callable($c5));   echo "</br>"; // TRUE

        echo "</br>";echo "</br>";

        var_dump(gettype($c1));   echo "</br>";  // string(6) "string"
        var_dump(gettype($c2));   echo "</br>";  // string(5) "array"
        var_dump(gettype($c3));   echo "</br>";  // string(5) "array"
        var_dump(gettype($c4));   echo "</br>";  // string(6) "object"
        var_dump(gettype($c5));   echo "</br>";  // string(6) "object"


    ?>