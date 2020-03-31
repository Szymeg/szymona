<?php
    #definiuje połączenie
    $dbhost = "localhost";
    $dbuser = "szymona";
    $dbpass = "Szymona2020";
    $db = "szymona";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
    #deklaruje zmienne
    $nip = $_POST['nip'];
    $regon = $_POST['regon'];
    $nazwa = $_POST['nazwa'];
    $vat = $_POST['vat'];
    if ($vat == 'on') {
        $vat = 'Tak';
    }
    else {
        $vat = 'Nie';
    }
    $ulica = $_POST['ulica'];
    $nrdomu = $_POST['nrdomu'];
    $nrmieszkania = $_POST['nrmieszkania']; 
    #wysyłam zapytanie do bazy danych
    $sql = "INSERT INTO kontrahenci (NIP, REGON, NAZWA, CZY_VAT, ULICA, NR_DOMU, NR_MIESZKANIA)
    VALUES ('$nip', '$regon', '$nazwa', '$vat', '$ulica', '$nrdomu', '$nrmieszkania');";
    mysqli_query($conn, $sql);
    #powrót do strony głównej
    header("Location: ./kontrahenci.php?dodano");