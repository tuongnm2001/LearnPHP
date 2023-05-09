<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 13</title>
</head>
<body>
    <h3>Lesson 13</h3>
    <?php 
       $a = 10 ;

       switch($a){
        case 0 : 
            echo "a equal 0 <br/>";
            break ;
        case 1 : 
            echo "a equal 1 <br/>";
            break ;
        case 2 : 
            echo "a equal 2 <br/>";
            break ;
        case 3 : 
            echo "a equal 3 <br/>";
            break ;
        default :
            echo 'Not found ';
       }
    ?>

    <br/>

    <?php 
        $year = 2013;
        switch(($year - 4) % 12){
            case 0 : $zodiac = 'Rat' ; break ;
            case 1 : $zodiac = 'Ox' ; break ;
            case 2 : $zodiac = 'Tiger' ; break ;
            case 3 : $zodiac = 'Rabbit' ; break ;
            case 4 : $zodiac = 'Dragon' ; break ;
            case 5 : $zodiac = 'Snake' ; break ;
            case 6 : $zodiac = 'Horse' ; break ;
            case 7 : $zodiac = 'Goat' ; break ;
            case 8: $zodiac = 'Monkey' ; break ;
            case 9 : $zodiac = 'Rooster' ; break ;
            case 10 : $zodiac = 'Dog' ; break ;
            case 11 : $zodiac = 'Pig' ; break ;
        }
        echo "{$year} is the year of the {$zodiac}. <br/>"
    ?>

    <br/>

    <?php 
        $user_type = 'press';
        switch($user_type){
            case 'student' :
                echo 'Welcome';
                break ;
            case 'press':
            case 'customize':
            case 'admin';
                echo 'Hello';
                break;
            default :
                echo 'Not found ';

        }
    ?>
    

</body>
</html> 