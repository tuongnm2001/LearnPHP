<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 24</title>
</head>
<body>
    <h3>Lesson 24</h3>
    <?php

      $bar = "outside"; // gobal scope

      function foo(){
        global $bar ; 
        if(isset($bar)){
            echo "foo : " . $bar . "<br/>";
        }
        $bar = "inside" ; //local scope ;
      }

      echo "1 : " . $bar . "<br/>";
      foo();
      echo "2 : " . $bar . "<br/>" ;
    ?>

</body>
</html>