<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        //error_reporting(0);
        $connect = mysqli_connect("localhost", "root","", "korporacja") or die("Nie udało się połączyć z bazą danych");
        $pytanie = $connect -> query("SELECT * FROM  miasta;") or die("Błędne zapytanie");
        $ile = mysqli_num_rows($pytanie);
        if($ile>0)
        {
            for($i=1;$i<=$ile;$i++)
            {
                $wiersz = mysqli_fetch_assoc($pytanie);
                $id = $wiersz["id_miasta"];
                $miasto = $wiersz["nazwaMiasta"];
                echo $id." ".$miasto."<br>";
            }
        }
        else
        {
            echo "brak danych";
        }
        mysqli_close($connect);
    ?>
    <?php
        $connect = mysqli_connect("localhost", "root","", "korporacja") or die("Nie udało się połączyć z bazą danych");
        $zapytanie = file_get_contents("kwarenda.txt") or die("z pliku nie można odczytać");
        $zapytanie = split(PHP_EOL, $zapytanie);
        for($x=0;$x<count($zapytanie);$x++)
        {
        $result = substr($zapytanie[$x],4, -1);
        $pytanie = $connect -> query($result) or die("Błędne zapytanie");
        $ile = mysqli_num_rows($pytanie) or die("brak ile");
        while($wiersz = mysqli_fetch_assoc($pytanie))
        {
            $id = $wiersz["id_miasta"];
            $miasto = $wiersz["nazwaMiasta"];
            echo $id." ".$miasto."<br>";
        } 
    }
        mysqli_close($connect);
    ?>
</body>
</html>