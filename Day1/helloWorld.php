<html>
    <body>
        <?php
            //This is single line comment
            //echo "Hello World!";

            echo "Hello World";
            echo "<br> This is a comment example";

            //Scalar Types
            $name = "Suraj";    //String
            $age = 27;          //Integer
            $time = 14.45;      //Float
            $class = true;      //Boolean

            //Compound Types
            $student_arr = array("Raj", "Punit", "Rihaan"); //Arrays

            class Student{     //Class
                public $marks;
            }
            $Stud = new Student();     //Object
            $Stud->marks = 90;

            //Special Types
            $null_var = null;

            echo "<br> String : ", $name;
            echo "<br> Integer : ", $age;
            echo "<br> Float : ", $time;
            echo "<br> Boolean : ", $class;
            echo "<br> Array : ", $student_arr[0];

            //echo "Object : ", $Stud;
            echo "<br> Null : ", $null_var;



            /* This is multiline comments
            Developed for php session */
        ?>
    </body>
</html>
