<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 5</title>
</head>
<body>
    <h3>Lesson 5</h3>
    <?php $numbers = array(14,34,52,12,42,63);?>

    Count : <?php echo count($numbers)?> </br>
    Max Value : <?php echo max($numbers)?></br>
    Min Value : <?php echo min($numbers)?></br>
    </br>
    <pre>
        Sort : <?php sort($numbers); print_r($numbers)?></br>
    </pre>

    </br>

    <pre>
        Reverse sort : <?php rsort($numbers); print_r($numbers)?></br>
    </pre>

    Implode : <?php echo $num_string = implode(" * " , $numbers);?> </br>
    Explode : <?php print_r(explode(" * ", $num_string))?>

    </br>

    15 in array? : <?php echo in_array(15, $numbers)?>
    52 in array? : <?php echo in_array(52, $numbers)?>
</body>
</html>