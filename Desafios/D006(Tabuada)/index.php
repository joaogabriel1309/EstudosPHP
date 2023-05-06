<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tabuada</title>
</head>
<body>
<main>
    <form method="post">
        <input type="text" name="EditTabuada" >
        <input type="submit">
        <?php 
            $tabuada = $_POST["EditTabuada"] ?? 0;
            $numero = 0;
            while($numero<=10){
                echo $numero . " x " . $tabuada . " = " . ($numero * $tabuada) . "<br>";
                $numero++;
            }
        ?>
    </form>
</main>
</body>
</html>
