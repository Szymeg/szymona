<?php
    #definiuje połączenie (include once nie zadziała)
    $dbhost = "localhost";
    $dbuser = "szymona";
    $dbpass = "Szymona2020";
    $db = "szymona";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
    #deklaruje zmienne
    $regon = $_POST['regon'];
    #wysyłam zapytanie do bazy danych
    $sql = "UPDATE kontrahenci SET DELETED = 1 WHERE REGON = '$regon';";
    mysqli_query($conn, $sql);
    #powrót do strony głównej
    header("Location: ./kontrahenci.php?usunięto");