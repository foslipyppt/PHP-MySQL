<html>
    <body>
        <?php
            //Control Structures

            //Conditional Statement if and if---else
            $name = "Punit";
            if($name == "Raj"){
                echo $name." Name is correct";
            }
            else{
                echo $name." Name is not correct";
            }



            //Conditional Statement if---elseif---else
            $marks = 61;

            if($marks >= 80){
                echo "<br> You got Grade A";
            }
            elseif($marks >= 60){
                echo "<br> You got Grade B";
            }
            elseif($marks >= 40){
                echo "<br> You got Grade C";
            }
            else{
                echo "<br> You got Grade D";
            }


            //Condtional Statement Switch
            echo "<br>";
                
            $day = "Sunday";
            switch($day){
                case "Sunday":
                    echo "Its Sunday !!!";
                    break;
                case "Monday":
                    echo "Its Monday !!!";
                    break;
                case "Tuesday":
                    echo "Its Tuesday !!!";
                    break;
                case "Wednesday":
                    echo "Its Wednesday !!!";
                    break;
                case "Thursday":
                    echo "Its Thursday !!!";
                    break;
                default:
                    echo "No matching day found !!";
            
            }


             //Iteratic Control Strucures while loop
             echo "<br>";

             $count = 1;
             while($count <= 5){
                echo "<br>While Count is ". $count;
                $count++;
             }

             //Iteratic Control Strucures do while loop
             echo "<br>";
             $num = 1;
             do{
                echo "<br>Do While Number is ". $num;
                $num++;
             }
             while($num <= 3);



             //Iterative Control Strucures for loop
             echo "<br>";
             for($i=1; $i<=3; $i++){
                echo "<br> for loop number :". $i;   
             }

             //Iterative Control Strucures foreach loop
             echo "<br>";
            $array = ["Red","Green","Blue","Yellow","Pink"];
            foreach($array as $color){
                echo "<br> Color :". $color;
            }

        ?>
 </body>
</html>
