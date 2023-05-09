<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 14</title>
</head>
<body>
    <h3>Lesson 14</h3>
    <?php 
        $count = 0  ;
        while($count <= 10){
            if($count ===5 ){
                echo 'Five,';
            }else{
                echo $count . ',' ;
            }
            $count ++  ;
        }
        echo "<br/>";
        echo "Count :{$count}";
    ?>
    

</body>
</html>