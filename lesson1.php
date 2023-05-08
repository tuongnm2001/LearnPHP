<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $var1 = 3 ;
        $var2 = 4 ;
        $var3 = 415 ;
        $var4 = 5 ;
    ?>

    Basic Math : <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?> <br/>
    Absolute value : <?php echo abs(0 - 300)?> <br/>
    Exponential: <?php echo pow(2,8)?><br/>
    Square root : <?php  echo sqrt(100)?><br/>
    Modulo: <?php echo fmod(20,7) ?><br/>
    Random : <?php echo rand()?><br/>
    Random (min max) : <?php echo rand(10, 100)?><br/>
    += : <?php echo $var1+=7 ?><br/>
    -= : <?php echo $var2-=2 ?><br/>
    *= : <?php echo $var4*=5 ?><br/>
    /= : <?php echo $var1/=5 ?><br/>
    <br/>
    Increment : <?php $var2++ ; echo $var2?> <br/>
    Decrement : <?php $var2-- ; echo $var2?> <br/>
    <br/>

    Add <?php echo 1 + "2" ?>
</body>
</html>
