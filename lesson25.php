<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 25</title>
</head>
<body>
    <h3>Lesson 25</h3>
    <?php
        function paint($room="office" , $color="red"){
            return "The color of the {$room} is {$color}.<br/>";
        }
      
        echo paint();
        echo paint("bedroom", "blue");
        echo paint("bedroom", null);
        echo paint(null, 'red');
        echo paint('bedroom');
        echo paint('blue');

    ?>

</body>
</html>