<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 7</title>
</head>
<body>
    <h3>Lesson 7</h3>
    <?php 
        $var1 = null;   
        $var2 = ""; 
    ?>

    var1 null : <?php echo is_null($var1)?><br/>
    var2 null : <?php echo is_null($var2)?><br/>
    var3 null : <?php echo is_null($var3)?><br/>

    var1 is set ? <?php echo isset($var1)?><br/>
    var2 is set ? <?php echo isset($var2)?><br/>
    var3 is set ? <?php echo isset($var3)?><br/>    

    <?php $var3  = "0" ?><br/>    
    var1 empty ? <?php echo empty($var1)?><br/>    
    var2 empty ? <?php echo empty($var2)?><br/>    
    var3 empty ? <?php echo empty($var3)?><br/>    
</body>
</html> 