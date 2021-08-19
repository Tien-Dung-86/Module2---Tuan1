<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doan so</title>
</head>
<body>
<form method="post">
    <textarea name="number" placeholder="number"></textarea>
    <button type="submit">Button</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $strNumbers = $_POST["number"];
//    var_dump($strNumbers);
    $arrNumbers = explode(",", $strNumbers);
    function checkPhoneNumber($number)
    {
        if (strlen($number) == 10) {
            return true;
        } else {
            return false;
        }
    }

    $viettel = [];
    $mobifone = [];
    $vinaphone = [];
    $headViettel = ["086", "096", "097"];
    $headMobiphone = ["090", "093", "070"];
    $headVinaphone = ["088", "091", "094"];
    foreach ($arrNumbers as $number) {
        if (checkPhoneNumber($number)) {
            $headNumber = substr($number, 0, 3);
            if (in_array($headNumber, $headViettel)) {
                array_push($viettel, $number);
            }
            elseif (in_array($headNumber, $headMobiphone)) {
                array_push($mobifone, $number);
            }
            elseif (in_array($headNumber, $headVinaphone)) {
                array_push($vinaphone, $number);
            }
        }
    }
    function showPhoneNumber($array)
    {
        $str = "";
        for ($i = 0; $i < count($array); $i++) {
            $str .= $array[$i];
        }
        return $str;
    }

    echo "Viettel:" . showPhoneNumber($viettel) . "<br>";
    echo "Mobiphone:" . showPhoneNumber($mobifone) . "<br>";
    echo "Vinaphone:" . showPhoneNumber($vinaphone) . "<br>";
}

?>
</body>
</html>
