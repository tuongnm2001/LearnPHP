<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 15</title>
</head>
<body>
    <h3>Lesson 15</h3>
    <?php 
        for($count = 0 ; $count <= 10 ; $count++) {
                echo $count . ", " ; 
        }
    ?>
    <br/>

    <?php 
        for($count = 0 ; $count <= 30 ;  $count++ ){
            if($count % 2 === 0){
                echo "$count is even. <br/>";
            }else{
                echo "$count is old <br/> ";
            }
        }
    ?>

</body>
</html>