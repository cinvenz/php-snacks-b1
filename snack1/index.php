<?php
 
 $arr_partite = [
     [
         "casa" => [
             
                 "nome" => "Olimpia Milano",
                 "punteggio" => 55
                
             
         ],
         "ospite" => [
             
                 "nome" => "Cantù",
                 "punteggio" => 60
                 
             
          
         ],
     ],
     [
         "casa" => [
             
                 "nome" => "Sassuolo",
                 "punteggio" => 84
                
             
           
         ],
         "ospite" => [
 
             
                 "nome" => "Venezia",
                 "punteggio" => 56
                 
             
           
         ],
     ],
     [
         "casa" => [
             
                 "nome" => "Lazio",
                 "punteggio" => 54
                
             
           
         ],
         "ospite" => [

             
                 "nome" => "Roma",
                 "punteggio" => 66
                 
             
           
         ],
     ],
     [
         "casa" => [
             
                 "nome" => "Genoa",
                 "punteggio" => 70
                
             
           
         ],
         "ospite" => [
 
             
                 "nome" => "Torino",
                 "punteggio" => 64
                 
             
        
         ],
     ],
 ];

       // foreach ($arrmatch as $key => $value) {
 //     foreach ($value as $key => $value_1) {
 //         foreach ($value_1 as $key => $value_2) {
 //             foreach ($value_2 as $key => $value_3) {
 //                 $key++;
 //                 echo $value_3;
 //             }
 //         }
 //     }
 // }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 1</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Partite di basket</h1>



    <ul><?php
         
    $arr_partite_len = count($arr_partite);

    for ($i = 0; $i < $arr_partite_len; $i++) {
        $match = $arr_partite[$i];
        echo "<li> {$match['casa']['nome']} - {$match['ospite']['nome']} | {$match['casa']['punteggio']} - {$match['ospite']['punteggio']} </li>";
    }
    ?></ul>
    

    
</body>
</html>