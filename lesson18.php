<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 18</title>
</head>
<body>
    <h3>Lesson 18</h3>
    <?php
        for ($i=0; $i <= 10; $i++) { 
            if($i==5){
                break;
            }
            echo $i . ",";
        }
    ?>

    <br/>

    <?php 
        for ($i=0; $i <= 5 ; $i++) { 
            if($i % 2 ===0 ){continue(1);}
            for ($k=0; $k <=5 ; $k++) { 
                if($k == 3 ){break(2);}
                echo $i . "-" .$k . "<br/>";
            }
        }
    ?>

</body>
</html>