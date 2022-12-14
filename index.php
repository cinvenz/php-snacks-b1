<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
 
        $arrmatch = array(
            "match1" => [
                "casa" => [
                    [
                        "nome" => "Olimpia Milano",
                        "punteggio" => "55"
                       
                    ],
                ],
                "ospite" => [
                    [
                        "nome" => "Cantù",
                        "punteggio" => "60"
                        
                    ],
                 
                ],
            ],
            "match2" => [
                "casa" => [
                    [
                        "nome" => "Sassuolo",
                        "punteggio" => "84"
                       
                    ],
                  
                ],
                "ospite" => [
        
                    [
                        "nome" => "Venezia",
                        "punteggio" => "56"
                        
                    ],
                  
                ],
            ],
        );
        
        foreach ($arrmatch as $key => $value) {
            foreach ($value as $key => $value_1) {
                foreach ($value_1 as $key => $value_2) {
                    foreach ($value_2 as $key => $value_3) {
                        $key++;
                        echo $value_3;
                    }
                }
            }
        }

    ?>

    
</body>
</html>