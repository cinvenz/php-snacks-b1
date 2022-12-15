<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 4</title>

</head>
<?php
    $arrnumber = [];

    while (count($arrnumber) < 15) {
        $randomnumber = rand (1, 20);
        if (!in_array($randomnumber, $arrnumber)) {
            $arrnumber[] = $randomnumber;
        }
    }
    var_dump($arrnumber);
?>
<body>
   
</body>
</html>