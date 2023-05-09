<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 19</title>
</head>
<body>
    <h3>Lesson 19</h3>
    <?php
        $ages = array(4,8,15,16,23,42);
        //current : current point value 
        echo "1 : " . current($ages) . "<br/>";

        //next: move the pointer forward
        //similar to using 'continue' inside a loop
        next($ages);
        echo "2 : " . current($ages) . "<br/>";
        next($ages);
        next($ages);
        echo "3 : " . current($ages) . "<br/>";

        //prev: move the pointer backward
        prev($ages);
        echo "4 : " . current($ages) . "<br/>";

        //reset: move the pointer to the first element
        reset($ages);
        echo"5 : " . current($ages) . "<br/>";

        //end: move the pointer to the last element
        end($ages);
        echo "6 : " . current($ages) . "<br/>";

        next($ages);
        echo"7 : " . current($ages) . "<br/>";
    ?>

    <br/>

    <?php 
    reset($ages);
        //while loop that moves the array pointer
        //similar to foreach
        while($age = current($ages)){
            echo $age . ", ";
            next($ages);
        }
    ?>

</body>
</html>