<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 8</title>
</head>
<body>
    <h3>Lesson 8</h3>

    <h4>Type Juggling</h4>
    <?php 
        $count = '2'
    ?>

    Type <?php echo gettype($count)?> <br/>

    <?php 
        $count += 3
    ?>

    <?php $cats = 'I have ' . $count .'cats'?>    
    Cats : <?php  echo gettype($cats)?>

    <h4>Type Catting </h4>
    <?php settype($count , 'integer')?>
    count : <?php echo gettype($count)?><br/>
    <?php $count2 = (string) $count?><br/>
    count : <?php echo gettype($count)?><br/>
    count2 : <?php echo gettype($count2)?><br/>

    <?php $test1 = 3 ?><br/>
    <?php $test2 = 3 ?><br/>
    <?php settype($test1, 'string')?><br/>
    <?php (string) $test2?><br/>

    test1 : <?php echo gettype($test1)?><br/>
    test2 : <?php echo gettype($test2)?><br/>

</body>
</html> 