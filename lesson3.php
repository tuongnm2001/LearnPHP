<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 3</title>
</head>
<body>
    <h3>Lesson 3</h3>
    <?php
        $numbers = array(4,8,15,16,23,42);
        echo $numbers[0]
    ?>

    <br/>

    <?php $mixed = array(6, "fox" , "dog" , array("x","y","z"))?>
    <?php //echo $mixed[2];?>
    <?php //echo $mixed[3];?> </br>
    
    <?php echo $mixed[3][1];?>
    <?php echo $mixed[3][1];?>
    <?php echo $mixed[2] = "cat";?>
    <?php echo $mixed[4] = "mouse";?>
    <?php echo $mixed[] = "duck";?>
    
    <pre>
        <?php echo print_r($mixed);?>
    </pre>

    <?php $hello = [1,2,3]?>
</body>
</html>