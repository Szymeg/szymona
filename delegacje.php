<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!--other tags-->
    <title>Zadanie zdalne e-MSI</title>
  </head>
  
  <body>
    <div class="row container-fluid">
        <div id="Lewy" class="col-sm-3">
            <nav class="nav flex-column nav-pills">
                <a class="nav-link" href="kontrolki.html">Różne kontrolki HTML</a>
                <a class="nav-link" href="pracownicy.html">Tabela Pracowników</a>
                <a class="nav-link" href="vat.html ">Tabela Faktur VAT</a>
                <a class="nav-link active" href="delegacje.php">Tabela Delegacji BD</a>
                <a class="nav-link" href="kontrahenci.php">Dane Kontrahentów</a>
            </nav>
        </div>
        <div class="col-sm-9" id="Prawy">
        <table class="table">
          <thead>
            <tr>
            <th >Lp.</th>
            <th scope="col">Imię i Nazwisko</th>
            <th scope="col">Data od:</th>
            <th scope="col">Data do:</th>
            <th scope="col">Miejsce wyjazdu:</th>
            <th scope="col">Miejsce przyjazdu:</th>
            </tr>
          </thead>
          <tbody>
            <?php
            #definiuje połączenie (include once nie zadziała przez funkcję)
            $dbhost = "localhost";
            $dbuser = "szymona";
            $dbpass = "Szymona2020";
            $db = "szymona";
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
            #wysyłam zapytanie do bazy danych
            $sql = "SELECT * FROM delegacje;";
            $result = mysqli_query($conn, $sql);
            #sprawdzam czy są rezultaty
            $resultCheck = mysqli_num_rows($result);
          
            if ($resultCheck > 0) {
              while ($row = mysqli_fetch_assoc($result)) { #tablica rzędów
                echo "<tr><td>" . $row["Lp"] . "</td><td>" . $row["Imię_i_Nazwisko"] . "</td><td>" . $row["Data_od"] . "</td><td>" . $row["Data_do"] . "</td><td>" . $row["Miejsce_wyjazdu"] . "</td><td>" . $row["Miejsce_przyjazdu"] . "</td></tr>";
              }
            }
            else {
              echo "brak rezultatów";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>