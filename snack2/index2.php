<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 2</title>
</head>
<body>
    
        <?php
            $name = $_GET['name'];
            $mail = $_GET['mail'];
            $age = $_GET['age'];

            if (strlen($name) > 3 && is_numeric($age) && strpos($mail, ".") && strpos($mail, "@")) {
                echo "accesso consentito";
            } else {
                echo "accesso negato";
            }
        ?>
    

    <form action="" method="get">
        <label for="name">firstname</label>
        <input type="text" id="name" name="name">
    
    
        <label for="mail">mail</label>
        <input type="text" id="mail" name="mail">
   
        <label for="age">age</label>
        <input type="text" id="age" name="age">
        <button>inserisci</button>
    </form>
</body>
</html>