<?php
    function odbierz()
    {
        if(isset($_POST["tabelname"]) && isset($_POST["name1"]) && isset($_POST["name2"]) && isset($_POST["name3"]) && isset($_POST["value1"]) && isset($_POST["value3"]) && isset($_POST["value3"]))
        {
            $tabelName = $_POST["tabelname"];
            $Name1 = $_POST["name1"];
            $Name2 = $_POST["name2"];
            $Name3 = $_POST["name3"];
            $Value1 = $_POST["value1"];
            $Value2 = $_POST["value2"];
            $Value3 = $_POST["value3"];
        }
        else
        {
            echo "ERROR";
        }

        connet("localhost", "root", "", "Wydatki", $tabelName, $Name1, $Name2, $Name3, $Value1, $Value2, $Value3);
    } 
    
    //Funkcja do łączenia z bazą danych i dodawana rekordu
    /*
    $baza - adres serwera bazodanowego
    $login - login użytkownika
    $haslo - hasło użytkownika
    $nameBase - nazwa bazy danych
    $tabelName - nazwa tabeli
    $Name1 - Nazwa kolumny 1
    $Name2 - Nazwa kolumny 2
    $Name3 - Nazwa kolumny 3
    $Value1 - Wartość1
    $Value2 - Wartość2
    $Value3 - Wartość3
    */
    function conect($baza, $login, $haslo, $nameBase, $tabelName, $Name1, $Name2, $Name3, $Value1, $Value2, $Value3)
    {
        //Tworzenie połączenia
        $con = new mysqli_connect($baza, $login, $haslo, $nameBase);
        
        //Sprawdzanie połączenia
        if($con->connect_error)
        {
            die("brak połączenia: " . $con->connect_eroor);
        }

        //dodawanie rekordu
        $sql = "INSERT INTO $tabelName ($Name1, $Name2, $Name3) VALUES ($Value1, $Value2, $Value3)";
        if($con->query($sql) === TRUE)
        {
            echo "Dodano";
        }
        else
        {
            echo "ERROR: ". $sql . <br> . $con->error;
        }

        $con->close();
    }
    function policz($baza, $login, $haslo, $nameBase, $tabelName, $name3)
    {
        //Tworzenie połączenia
        $con = new mysqli_connect($baza, $login, $haslo, $nameBase);
        
        //Sprawdzanie połączenia
        if($con->connect_error)
        {
            die("brak połączenia: " . $con->connect_eroor);
        }

        //liczenie wydatków tabeli
        $sql = "SELECT SUM($name3) FROM $tabelName";
        if($con->query($sql) === TRUE)
        {
            echo "Dodano";
        }
        else
        {
            echo "ERROR: ". $sql . <br> . $con->error;
        }
        $con->close();
    }
?>