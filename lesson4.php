<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 4</title>
</head>
<body>
    <h3>Lesson 4</h3>
    <?php
        $arr = ["firstName" => "Tuong", "lastName" => "Nguyen"]?>

    <?php echo $arr["firstName"]; ?> </br>
    <?php echo $arr["firstName"] . " " . $arr["lastName"] ?>
    <br/>

    <?php $numbers= array(4,8,15,16,23,42)?>
    <?php $numbers = array(0=>4, 1=>8 , 2=>15, 3=>16, 4=>23, 5=>42)?>
    <?php echo $numbers[2]?>
</body>
</html>