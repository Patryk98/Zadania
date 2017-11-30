CREATE DATABASE szkola character set utf8;
use szkola;
CREATE TABLE uczniowie (
    id_ucz int unsigned not null primary key,
    nazwisko char(40) not null,
    Imie char(20) not null,
    Pesel int(11) not null,
    Adres_ul char(40) not null,
    Adres_nr char(10) not null,
    Miasto char(92) not null
);
Insert into uczniowie (nazwisko, Imie, Pesel, Adres_ul, Adres_nr, Miasto) values (Abacki, Jan, 95184627981, nocna, 21a, Gniezno);
Insert into uczniowie (nazwisko, Imie, Pesel, Adres_ul, Adres_nr, Miasto) values (Babacki, Tomasz, 95184679816, Gwiezdna, 2, Gniezno);
Insert into uczniowie (nazwisko, Imie, Pesel, Adres_ul, Adres_nr, Miasto) values (Cabacki, Jerzy, 95184279816, Mierna, 13b, Kutno);
Insert into uczniowie (nazwisko, Imie, Pesel, Adres_ul, Adres_nr, Miasto) values (Dsaabacki, Tobiasz, 95186279816, Bierna, 3, Miastko);
Insert into uczniowie (nazwisko, Imie, Pesel, Adres_ul, Adres_nr, Miasto) values (Ebacki, Adrian, 95184627816, Marna, 456, Mielno);
