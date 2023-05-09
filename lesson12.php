<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 12</title>
</head>
<body>
    <h3>Lesson 12</h3>
    <?php 
        $a = 4 ;
        $b = 3 ;
        $c = 20 ;
        $d = 1 ;

        if($a > $b || $c > $d ){
            echo "a is larger than b ||";
            echo "c is larger than d ";
        }
    ?>

    <br/>

    <?php 
        $e = 100 ;
        if(!isset($e)){
            $e = 200 ;
        }
        echo $e ;
    ?>

    <br/>

    <?php 
        $quantity = '' ;
        if(empty($quantity) && !is_numeric($quantity)){
            echo "You must enter a quantity";
        }
    ?>

</body>
</html> 