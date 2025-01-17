<html>
    <body>
        <?php
            //Arrays and Functions

            //Arrays Indexed

            $fruits = ["Banana","Apple","Cherry","Orange"];
            echo "Selected Fruit : " . $fruits[1];
            foreach($fruits as $fruit){
                echo "<br> Fruit :". $fruit;
            }

            //Associative Arrays
            echo "<br>";
            $ages = ["John" => 25, "Raj" => 18, "Alice" => 22];
            echo "<br> Selected Age :". $ages["Alice"];
            foreach($ages as $name => $age){
                echo "<br>". $name ." is ". $age ." years old.";
            }

            //Multi-dimensional Arrays
            echo "<br>";
            $students = [
                ["John", 25, false],
                ["Raj", 18, true], 
                ["Alice", 22, false]
            ];

            echo "<br> Student 1 is present in the class :" . $students[0][2];

            //Array Manipulation
            echo "<br>";
            $classroom = ["Stuart","Ben","Rick"];
            foreach($classroom as $student){
                echo "<br> Student :". $student;
            }

            //Adding elements
            echo "<br>";
            $classroom[] = "Alen";
            array_push($classroom, "Xavier");
            foreach($classroom as $student){
                echo "<br> Student :". $student;
            }

            // Updating elements
            echo "<br>";
            $classroom[2] = "Raj";
            foreach($classroom as $student){
                echo "<br> Student :". $student;
            }

            // Counting Elements
            echo "<br><br>";
            echo "Number of elements in the array are : ". count($classroom);

            //Deleting Elements
            unset($classroom[1]);
            echo "<br>";
            print_r($classroom);

            //Re-Indexing Elements
            $classroom = array_values($classroom);
            echo "<br>";
            print_r($classroom);

        ?>
 </body>
</html>
