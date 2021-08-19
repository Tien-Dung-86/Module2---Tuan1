<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        textarea {
            width: 800px;
        }
    </style>
</head>
<body>
<form method="post">
    <textarea name="telephone"></textarea>
    <input type="submit">
</form>
</body>
</html>

<?php
//$phoneNumber1 = '0331234568';
//$phoneNumber2 = '0701562359';
//$phoneNumber3 = '0846415289';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $telephone = $_POST['telephone'];
    $newPhone = [0,3,3,1,5,6,1,2,3,8];
    function arrangePhoneNumbers($newPhone)
    {
        if (count($newPhone) >= 10) {
            return true;
        } else {
            return false;
        }
    }

    $viettel = [];
    $mobifone = [];
    $vinaphone = [];

    for ($i = 0; $i < count($newPhone); $i++) {
        if (($newPhone[0] == 0) && ($newPhone[1] == 3) && ($newPhone[2] == 3)) {
            array_push($viettel, $newPhone);}
//        } else if (($newPhone[0] == 0) && ($newPhone[1] == 7) && ($newPhone[2] == 0)) {
//            array_push($mobifone, $newPhone);
//        } else if (($newPhone[0] == 0) && ($newPhone[1] == 8) && ($newPhone[2] == 4)) {
//            array_push($vinaphone, $newPhone);
//        }
    }

    function displayPhoneNumbers($array)
    {
        $str = "";
        for ($j = 0; $j < count($array); $j++) {
            $str .= $array[$j] . ",";
        }
        return $str;
    }
print_r(displayPhoneNumbers($viettel));
//    echo "Viettel: " . displayPhoneNumbers($viettel) . "<br>";
//    echo "Mobifone: " . displayPhoneNumbers($mobifone). "<br>";
//    echo "Vinaphone: " . displayPhoneNumbers($vinaphone) . "<br>";
}

