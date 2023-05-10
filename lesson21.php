<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 21</title>
</head>
<body>
    <h3>Lesson 21</h3>
    <?php
       function say_hello_to($word){
        echo "Hi {$word}";
       }

       $name = "Nguyen Minh Tuong ";

       say_hello_to($name);
    ?>

    <br/>

    <?php
        function better_hello($greeting , $target , $punct){
            echo $greeting . " " . $target . $punct . "<br/>";
        }

        better_hello('Hello' , $name , "!");
        better_hello('Greetings' , $name, "!")
        // better_hello('Greetings' , $name, null)
    ?>

</body>
</html>