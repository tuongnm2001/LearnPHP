<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 10</title>
</head>
<body>
    <h3>Lesson 10</h3>
    <?php 
        $a = 15 ;
        $b = 10 ;

        if($a > $b){
            echo "a is larger than b "; 
        }

        if($a < $b){
            echo "a is not larger than b ";
        }
    ?>
    <br/>
    <?php 
        $numerator = 20 ;
        $denominator = 5 ;
        if($denominator > 0 ){
            $result = $numerator / $denominator ;
        }
        echo "Result :{$result}";
    ?>

</body>
</html> 