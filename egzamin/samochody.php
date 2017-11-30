<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wynajmujemy samochody</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="kontener">
    <div class="baner">
        <h1>Wynajem Samochodów</h1>
    </div>
    <div class="okno"></div>
    <div class="lewy">
        <h2>DZIŚ POLECAMY TOYOTĘ ROCZNIK 2014 </h2>
        <?php
        Zad1();
        ?>
        <h2>WSZYSTKIE DOSTĘPNE SAMOCHODY</h2>
        <?php
        Zad2();
        ?>
    </div>
    <div class="center">
        <h2>ZAMÓWIONE AUTA Z NUMERAMI TELEFONÓW KLIENTÓW</h2>
        <?php
        Zad3();
        ?>
    </div>
    <div class="prawy">
        <h2>NASZA OFERTA</h2>
        <ul>
            <li>Fiat</li>
            <li>Toyota</li>
            <li>Opel</li>
            <li>Mercedes</li>
        </ul>
        <p>Tu pobierzesz naszą <a href="komis.sql">bazę danych</a></p>
        <p>Autor strony: PESEL</p>
    </div>
    </div>
</body>
</html>
<?php


function Zad1()
{
    $host = "localhost";
    $login = "root";
    $haslo = "";
    $baza = "wynajem";
    $connect = mysqli_connect($host, $login, $haslo, $baza);
    $zapytanie = "SELECT id, model, kolor FROM `samochody` WHERE marka = 'Toyota' AND rocznik = 2014;";
    $wynik = $connect -> query($zapytanie);
    if($wynik)
    {
        $ile = mysqli_num_rows($wynik);
        for($i=0;$i<$ile;$i++)
        {
            $record = mysqli_fetch_assoc($wynik);
            $id = $record["id"];
            $model = $record["model"];
            $kolor = $record["kolor"];

            echo $id." Toyota ".$model." kolor ".$kolor;
        }
    }
    mysqli_close($connect);
}
function Zad2()
{
    $host = "localhost";
    $login = "root";
    $haslo = "";
    $baza = "wynajem";
    $connect = mysqli_connect($host, $login, $haslo, $baza);
    $zapytanie = "SELECT id, marka, model, rocznik FROM `samochody`;";
    $wynik = $connect -> query($zapytanie);
    if($wynik)
    {
        $ile = mysqli_num_rows($wynik);
        for($i=0;$i<$ile;$i++)
        {
            $record = mysqli_fetch_assoc($wynik);
            $id = $record["id"];
            $marka = $record["marka"];
            $model = $record["model"];
            $kolor = $record["rocznik"];

            echo $id." ".$marka." ".$model." ".$kolor."<br>";
        }
    }
    mysqli_close($connect);
}

function Zad3()
{
    $host = "localhost";
    $login = "root";
    $haslo = "";
    $baza = "wynajem";
    $connect = mysqli_connect($host, $login, $haslo, $baza);
    $zapytanie = "SELECT samochody.id, samochody.model, zamowienia.telefon from samochody, zamowienia where samochody.id = zamowienia.Samochody_id;";
    $wynik = $connect -> query($zapytanie);
    if($wynik)
    {
        $ile = mysqli_num_rows($wynik);
        for($i=0;$i<$ile;$i++)
        {
            $record = mysqli_fetch_assoc($wynik);
            $id = $record["id"];
            $model = $record["model"];
            $telefon = $record["telefon"];

            echo $id." ".$model." ".$telefon."<br>";
        }
    }
    mysqli_close($connect);
}

?>