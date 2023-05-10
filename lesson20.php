<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 20</title>
</head>
<body>
    <h3>Lesson 20</h3>
    <?php
        // function say_hello(){
        //     echo "Hello World";
        // }
        // say_hello();

        function say_hello_to($word){
            echo "Hello {$word}! <br/>";
        }

        say_hello_to("Everyone ");

        say_hello_loudly();

        function say_hello_loudly(){
            echo "Hello Loudly";
        }
    ?>

</body>
</html>