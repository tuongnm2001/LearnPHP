<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 17</title>
</head>
<body>
    <h3>Lesson 17</h3>
    <?php
      for($count = 0 ; $count <= 10 ; $count++){
        if($count % 2 !== 0 ){
            continue ; 
        }
        echo $count . ",";
      }
    ?>

    <br/>

    <?php
        $count = 0 ;
        while($count <= 10){
            if($count === 5 ){
                $count++;
                continue;
            }
            echo $count . ", ";
            $count++;
        }
    ?>

    <?php 
        for($i=0 ; $i<=5 ; $i++){
            if($i % 2 ==0){continue;}
            for ($k=0; $k <=5 ; $k++) { 
                echo $k . "-" . $k . "<br/>";
            }
        }
    ?>

</body>
</html>