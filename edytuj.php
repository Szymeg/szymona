<?php
    #definiuje połączenie (include once nie zadziała)
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
    $sql = "UPDATE kontrahenci SET NIP = '$nip', REGON = '$regon', NAZWA = '$nazwa', CZY_VAT = '$vat', ULICA = '$ulica', NR_DOMU = '$nrdomu', NR_MIESZKANIA = '$nrmieszkania'
    WHERE REGON = '$regon';";
    mysqli_query($conn, $sql);
    #powrót do strony głównej
    header("Location: ./kontrahenci.php?zapisano_zmiany");