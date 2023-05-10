<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 23</title>
</head>
<body>
    <h3>Lesson 23</h3>
    <?php
      function add_subt($var1 , $var2){
        $add = $var1 + $var2;
        $subt = $var1 - $var2;
        return array($add, $subt) ;
      }
      $result_array = add_subt(10,5);
      echo "Add : " . $result_array[0] . "<br/>" ; 
      echo "Subt : " . $result_array[1] . "<br/>"; 

      list($add_result , $subt_result) = add_subt(20,7);
      echo "Add " . $add_result . "<br/>";
      echo "Subt " . $subt_result . "<br/>";
    ?>

</body>
</html>