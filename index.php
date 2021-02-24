<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <?php
        $frase = 'Lorem ipsum dolor sit amet consectetur adipisicing elit Assumenda earum';

        $parola = $_GET["parola"];
        $lung = strlen($frase);
        $bad = str_replace($parola, '***' , $frase);


        echo 'la frase è: ' .$frase .'<br>';
        echo 'la frase è lunga: ' .$lung .'<br>';
        echo 'la frase con badword: ' .$bad .'<br>';
        echo 'la badword è:' .$parola;

    ?>
</body>
</html>