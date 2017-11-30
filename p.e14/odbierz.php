<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Próbny Egzamin e.14</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontener">
        <div class="naglowek">
            <a href="index.php"><img src="baner.jpg"></a>
        </div>
        <div class="content">
            <?php
                if(isset($_POST["login"]) && isset($_POST["haslo1"]) && isset($_POST["haslo2"]))
                {
                    $login = $_POST["login"];
                    $haslo1 = $_POST["haslo1"];
                    $haslo2 = $_POST["haslo2"];
                }
                if($haslo1 == $haslo2)
                {
                    echo $login;
                }
                else
                {
                    echo "Błąd rejestracji";
                }
            ?>
        </div>
        <div class="menu">
            <a href="index.php">Strona Główna</a><br><br>
            <a href="logowanie.php">Logowanie</a><br><br>
            <a href="strona1.html">Liczby</a><br>
        </div>
        <div class="stopka">
            <h3>Copyright 2017</h3>
        </div>
    </div>
</body>
</html>