<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quantities = $_REQUEST['number'];

    function isPrime($number)
    {
        if ($number < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    function displayQuantityPrime($quantity)
    {
        $count = 0;
        $N = 2;
        while ($count < $quantity) {
            if (isPrime($N)) {
                echo $N . ", ";
                $count++;
            }
            $N++;
        }

    }

    echo displayQuantityPrime($quantities);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>Nhap vao so luong so nguyen to can in ra: </label>
    <br>
    <input type="text" name="number"/>
    <br>
    <button type="submit">Print</button>

</form>
</body>
</html>