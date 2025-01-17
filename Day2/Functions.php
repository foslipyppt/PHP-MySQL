<html>
    <body>
        <?php
            //Functions

            //Without Parameter Function
            function firstFunction(){
                echo "Hello World !";
            }
            firstFunction();

            //With Parameter Function
            function greet($name){
                echo "<br> Hello " . $name;
            }
            greet("Class");

            //With Default Parameter Function
            function defaultParameter($name = "Guest"){
                echo "<br> Hello " . $name;
            }
            defaultParameter();
            defaultParameter("Default Parameter !");

            // Function that returns a value
            function multiply($a, $b){
                return $a*$b;
            }
            $result = multiply(8, 9);
            echo "<br>". $result;

            //Function by Value Example
            function addTen($num){
                $num += 10;
                echo "<br> Function Value : ". $num;
            }
            $x=5;
            addTen($x);
            echo "<br> Original Value : ". $x;
            echo "<br>";

            //Function by Reference Example
            function addTenByRefer(&$num){
                $num += 10;
                echo "<br> Function Value : ". $num;
            }
            $y=5;
            addTenByRefer($y);
            echo "<br> Original Value : ". $y;

            //Early Returning the Values in Function(Conditional Return)
            echo "<br>";
            function checkEvenOdd($num){
                if($num % 2 == 0){
                    return "Even";
                }
                return "Odd";
            }
            echo "<br>";
            echo checkEvenOdd(18);
            echo "<br>";
            echo checkEvenOdd(15);



        ?>
 </body>
</html>
