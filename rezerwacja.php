<?php

if (isset($_POST['data']) && isset($_POST['ludzie']) && isset($_POST['tel'])) {

    $data = $_POST['data'];
    $ludzie = $_POST['ludzie'];
    $tel = $_POST['tel'];

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'baza1';

    $connect = mysqli_connect($server, $user, $password, $database);
    $zapytanie = 'INSERT INTO rezerwacje ("data_rez", "liczba_osob", "telefon") VALUES ("$data", "$ludzie", "$tel")';

    mysqli_query($connect, $zapytanie);
    mysqli_close($connect);
    echo "Dodano rezerwację do bazy";

}

?>