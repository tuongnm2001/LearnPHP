<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 16</title>
</head>
<body>
    <h3>Lesson 16</h3>
    <?php 
        $ages = array(4,8,12,74,23,51);
        foreach($ages as $age){
            echo "Age : {$age} <br/>" ;    
        }
    ?>

    <br/>

    <?php 
        $person = array(
            "firstName" => "Kevin",
            "lastName" => "Skoglund",
            "address" => "123 Main Street",
            "city" => "Beverly Hills",
            "state"=>"CA",
            "zip_code"=>"90210"
        );
        foreach($person as $attribute => $data){
            $attr_nice = ucwords(str_replace("_", " " , $attribute));
            echo "{$attr_nice} : {$data} <br/>";
        }
    ?>

</body>
</html>