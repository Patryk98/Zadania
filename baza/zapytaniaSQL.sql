--Wyświetla wszystkich pracowników z tabeli pracownicy.
SELECT * from pracownicy;

--Wyświetla imie i nazwisko wszystkich pracowników.
SELECT imie, nazwisko from pracownicy;

--Wyświetl imie i nazwisko pracownika którego id=7.
select imie, nazwisko from pracownicy where id_pracownika = 7;

--Wyświetl wszystkich pracowników którzy zarabiają przynajmniej 2500zł.
select * from pracownicy where wynagrodzenie >= 2500;

--Wyświetl wszystkich pracowników którzy pracują w odziale o identyfikatorze 3.
select * from pracownicy where oddzial = 3;

--Wyświetl wszystkich pracowników którzy pracują w innym oddziale niż 3.
select * from pracownicy where oddzial != 3;

--Wyświetl wszystkich pracowników którzy zastali zatrudnieni po 23 lutego 2012r
select * from pracownicy where data_zatrudnienia > '2012-02-23';

