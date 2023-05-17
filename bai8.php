<?php 

    //1. Kiểu số nguyên int
    //khai bao
    $age = 30 ;

    //Ép kiểu
    $age = (int)$age ;
    //var_dump($age)

    //kiem tra so nguyen 
    $check = is_int($age);
    // var_dump($check);

    //2. Kiểu boolean
    $check = -1 ;
    $checkBool = (bool)$check;

    //3.Kiểu số thực
    $fee = 10;
    $fee = (float)$fee;
    // var_dump($fee);
    // echo '<br/>';
    // var_dump(is_float($fee));

    //4.Kiểu chuỗi
    $message = 10;
    $message = (string)$message;
    $checkString = is_string($message);
    // var_dump($checkString);
    // var_dump($message);

    // 5.Kiểu mảng
    $carArr = [];
    $carArr = (array)$carArr;
    $checkArr = is_array($carArr);
    // var_dump($carArr);
    // echo '<br/>';
    // var_dump($checkArr)
    
    //6.Kieu du lieu null
    $total = null ;
    $total = (int)$total ;

    // $checkNull = is_null($total);
    // var_dump($total);
    // echo "<br/>";
    // var_dump($checkNull);

    //7 kieu resource
    // $curl = $curl_init();
    // $checkType = get_resource_type($crul);
    // var_dump($curl);
    // echo "<br/>";
    // var_dump($checkType);

    //8 Kieu doi tuong object

    $dataCustomer = [
        "Nguyen Minh Tuong"
    ] ;
    $dataCustomer = (object)$dataCustomer ; // ép kiểu
    $checkObject = is_object($dataCustomer);
    // var_dump($dataCustomer);
    // echo "<br/>";
    // var_dump($checkObject);

    $customerObject = new StdClass();
    $customerObject-> age = 30 ;
    var_dump($customerObject);
?>