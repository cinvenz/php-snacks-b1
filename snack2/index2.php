<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 2</title>
</head>
<body>
    <div>
        <?php
            $name = $_GET['name'];
            $mail = $_GET['mail'];
            $age = $_GET['age'];

            if (strlen($name) > 3 && is_numeric($age) && strpos($mail, ".") && strpos($mail, "@")) {
                echo "accesso riuscito";
            } else {
                echo "accesso negato";
            }
        ?>
    </div>
</body>
</html>