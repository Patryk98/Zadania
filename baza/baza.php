<!DOCTYPE html>
<html>
<head>
<title>korporacja 3.01</title>
<meta name="description" content="Skrypt generujący zawartość bazy korporacja w MySQL" />
<meta name="author" content="sniecinski.eu" />
<meta charset="utf-8" />
</head>
<body>
<?php
$serwer = new mysqli('localhost','root','','korporacja');
if($serwer -> connect_errno)
{
echo "<h3>Nie można nawiązać połączenia z serwerem bazodanowym</h3>".$serwer -> connect_error;
}
else
{
$wynik = $serwer -> query("CREATE TABLE `miasta` (`id_miasta` int(11) NOT NULL,
`nazwaMiasta` tinytext COLLATE utf8_polish_ci NOT NULL)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci");
if($wynik) echo "1. Utworzenie tabeli miasta OK<br />"; else echo "1. Tabela miasta BŁĄD utworzenia<br />";

$wynik = $serwer -> query("INSERT INTO `miasta` (`id_miasta`, `nazwaMiasta`) VALUES
(1, 'New York'),
(2, 'Warszawa'),
(3, 'Londyn'),
(4, 'Marsylia'),
(5, 'Wenecja')");
if($wynik) echo "2. Dane tabeli miasta OK<br />"; else echo "2. Dane tabeli miasta BŁĄD<br />";

$wynik = $serwer -> query("CREATE TABLE `oddzialy` (`id_oddzialu` int(11) NOT NULL,
`nazwaOddzialu` tinytext COLLATE utf8_polish_ci NOT NULL,
`kierownikId` int(11) DEFAULT NULL, `miastoId` int(11) DEFAULT NULL)
ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci");
if($wynik) echo "3. Utworzenie tabeli oddziały Ok<br />"; else echo "3. Tabela oddziały BŁĄD utworzenia<br />";

$wynik = $serwer -> query("INSERT INTO `oddzialy` (`id_oddzialu`, `nazwaOddzialu`, `kierownikId`, `miastoId`) VALUES
(1, 'IT', 5, 2),
(2, 'Accounting', 4, NULL),
(3, 'HR', 8, 2),
(4, 'Marketing', 3, 1),
(5, 'Kontrola', NULL, 3),
(6, 'Magazyn', 5, 4)");
if($wynik) echo "4. Dane tabeli oddziały OK<br />"; else echo "4. Dane tabeli oddziały BŁĄD<br />";

$wynik = $serwer -> query("CREATE TABLE `pracownicy` (
`id_pracownika` int(11) NOT NULL,
`imie` tinytext COLLATE utf8_polish_ci NOT NULL,
`drugie_imie` tinytext COLLATE utf8_polish_ci,
`nazwisko` tinytext COLLATE utf8_polish_ci NOT NULL,
`plec` enum('k','m') COLLATE utf8_polish_ci,
`data_urodzenia` date NOT NULL,
`wynagrodzenie` float NOT NULL,
`oddzial` tinyint(3) UNSIGNED NOT NULL,
`data_zatrudnienia` date NOT NULL,
`data_zwolnienia` date DEFAULT NULL,
`aktywny` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci");
if($wynik) echo "5. Tabela pracownicy OK<br />"; else echo "5. Tabela pracownicy BŁĄD<br />";
$wynik = $serwer -> query("INSERT INTO `pracownicy` (`id_pracownika`, `imie`, `drugie_imie`, `nazwisko`, `plec`, `data_urodzenia`, `wynagrodzenie`, `oddzial`, `data_zatrudnienia`, `data_zwolnienia`, `aktywny`) VALUES
(1, 'Maria', NULL, 'Kowalska', 'k', '1985-12-18', 2000, 1, '2011-10-29', NULL, 1),
(2, 'Piotr', 'Grzegorz', 'Nowak', 'm', '1990-10-13', 1500, 3, '2011-10-29', NULL, 1),
(3, 'Patrycja', NULL, 'Wieczorek', 'k', '1995-05-28', 1000, 4, '2012-01-24', '2013-11-25', 0),
(4, 'Lilia', 'Luiza', 'Borowik', 'k', '1983-07-11', 2700, 2, '2012-06-15', NULL, 1),
(5, 'Janusz', NULL, 'Derkacz', 'm', '1978-01-24', 1200, 1, '2013-01-15', NULL, 1),
(6, 'Jan', NULL, 'Miller', NULL, '1993-10-20', 2000, 4, '2013-03-27', '2014-10-06', 0),
(7, 'Eliza', 'Dorota', 'Turczyborska', 'k', '1992-09-09', 2110, 1, '2013-05-01', NULL, 1),
(8, 'Jakub', NULL, 'Wieczorek', 'm', '1987-03-19', 1000, 3, '2013-10-09', '2014-03-01', 0),
(9, 'Robert', NULL, 'Antolak', 'm', '1989-12-13', 2900, 2, '2013-12-20', '2014-05-05', 0),
(10, 'Dorota', NULL, 'Wieczorek', 'k', '1995-12-13', 800, 2, '2015-12-20', NULL, 1),
(11, 'Jan', 'Marek', 'Kowalski', 'm', '1990-05-24', 2500, 1, '2014-01-24', NULL, 1)");
if($wynik) echo "6. Dane tabeli pracownicy - OK<br />"; else echo "6. Dane tabeli pracownicy BŁĄD<br />";
$wynik = $serwer -> query("ALTER TABLE `oddzialy` ADD PRIMARY KEY (`id_oddzialu`)");
if($wynik) echo "7. oddzialy - PRIMARY KEY is OK<br />"; else echo "7. oddzialy - PRIMARY KEY - BŁĄD<br />";
$wynik = $serwer -> query("ALTER TABLE `miasta` ADD PRIMARY KEY (`id_miasta`)");
if($wynik) echo "8. miasta - PRIMARY KEY is OK<br />"; else echo "8. miasta - PRIMARY KEY - BŁĄD<br />";
$wynik = $serwer -> query("ALTER TABLE `pracownicy` ADD PRIMARY KEY (`id_pracownika`)");
if($wynik) echo "9. pracownicy - PRIMARY KEY is OK<br />"; else echo "9. pracownicy - PRIMARY KEY - BŁĄD<br />";
$wynik = $serwer -> query("ALTER TABLE `miasta`
MODIFY `id_miasta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6");
if($wynik) echo "10. Miasta AI - is OK<br />"; else echo "10. Miasta AI - BŁAD<br />";
$wynik = $serwer -> query("ALTER TABLE `oddzialy`
MODIFY `id_oddzialu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7");
if($wynik) echo "11. Oddzialy AI - is OK<br />"; else echo "11. Oddzialy AI - BŁĄD<br />";
$wynik = $serwer -> query("ALTER TABLE `pracownicy`
MODIFY `id_pracownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12");
if($wynik) echo "12. Pracownicy AI - is OK<br />"; else echo "12. Pracownicy AI - BŁĄD<br />";

$serwer -> close();
}
?>
</body>
</html>