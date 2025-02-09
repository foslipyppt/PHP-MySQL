<html>
    <body>
        <?php
            //Inheritence
            class Animal{    //Parent Class
                public function makeSound(){
                    return "Some generic sound";
                }
            }

            class Cat extends Animal{
                public function makeSound(){
                    return "Meow <br>";
                }
            }

            class Dog extends Animal{
                public function makeSound(){
                    return "Bark <br>";
                }
            }

            $dog = new Dog();
            echo $dog->makeSound();
            $cat = new Cat();
            echo $cat->makeSound(); 

    ?>
 </body>
</html>
