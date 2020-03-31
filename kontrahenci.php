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
              <a class="nav-link" href="delegacje.php">Tabela Delegacji BD</a>
              <a class="nav-link active" href="kontrahenci.php">Dane Kontrahentów</a>
            </nav>
        </div>

        <div class="col-sm-9" id="Prawy">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">DODAJ</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">EDYTUJ</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">USUŃ</a>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <form action="dodaj.php" method="POST">
              <div class="form-group">
                <label for="nip">NIP</label>
                <input type="text" class="form-control" name="nip" placeholder="Podaj NIP">
              </div>
              <div class="form-group">
                <label for="regon">REGON</label>
                <input type="number" class="form-control" name="regon" min="1000000000" max="9999999999" placeholder="Podaj REGON">
              </div>
              <div class="form-group">
                <label for="nazwa">NAZWA</label>
                <input type="text" class="form-control" name="nazwa" placeholder="Podaj nazwę">
              </div>
              <div class="form-group">
                <label for="vat">CZY PŁATNIK VAT?</label>
                <input type="checkbox" class="form-control" name="vat">
              </div>
              <div class="form-group">
                <label for="ulica">ULICA</label>
                <input type="text" class="form-control" name="ulica" placeholder="Podaj Ulicę">
              </div>
              <div class="form-group">
                <label for="nrdomu">NUMER DOMU</label>
                <input type="text" class="form-control" name="nrdomu" placeholder="Podaj nr domu">
              </div>
              <div class="form-group">
                <label for="nrmieszkania">NUMER MIESZKANIA</label>
                <input type="text" class="form-control" name="nrmieszkania" placeholder="Podaj nr mieszkania">
              </div> 
              <button type="submit" name="submit">DODAJ KONTRAHENTA</button>         
            </form>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <form action="edytuj.php" method="POST">
              <div class="form-group">
                <label for="nip">NIP</label>
                <input type="text" class="form-control" name="nip" placeholder="Podaj NIP">
              </div>
              <div class="form-group">
                <label for="regon">REGON</label>
                <input type="number" class="form-control" name="regon" min="1000000000" max="9999999999" placeholder="Podaj REGON">
              </div>
              <div class="form-group">
                <label for="nazwa">NAZWA</label>
                <input type="text" class="form-control" name="nazwa" placeholder="Podaj nazwę">
              </div>
              <div class="form-group">
                <label for="vat">CZY PŁATNIK VAT?</label>
                <input type="checkbox" class="form-control" name="vat">
              </div>
              <div class="form-group">
                <label for="ulica">ULICA</label>
                <input type="text" class="form-control" name="ulica" placeholder="Podaj Ulicę">
              </div>
              <div class="form-group">
                <label for="nrdomu">NUMER DOMU</label>
                <input type="text" class="form-control" name="nrdomu" placeholder="Podaj nr domu">
              </div>
              <div class="form-group">
                <label for="nrmieszkania">NUMER MIESZKANIA</label>
                <input type="text" class="form-control" name="nrmieszkania" placeholder="Podaj nr mieszkania">
              </div> 
              <button type="submit" name="submit">ZAPISZ ZMIANY</button>         
            </form>
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
          <br>
          <form action="usuń.php" method="POST">
              <div class="form-group">
                <label for="regon"><h5>PODAJ REGON KONTRAHENTA DO USUNIĘCIA</h5></label>
                <input type="number" class="form-control" name="regon" min="1000000000" max="9999999999" placeholder="Podaj REGON">
              </div>
              <button type="submit" name="submit">USUŃ KONTRAHENTA</button>         
            </form>
          </div>
        </div>
        <br>
        <table class="table">
          <thead>
            <tr>
            <th scope="col">NIP</th>
            <th scope="col">REGON</th>
            <th scope="col">NAZWA</th>
            <th scope="col">CZY PŁATNIK VAT?</th>
            <th scope="col">ULICA</th>
            <th scope="col">NUMER DOMU</th>
            <th scope="col">NUMER MIESZKANIA</th>
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
            $sql = "SELECT * FROM kontrahenci WHERE DELETED = 0;";
            $result = mysqli_query($conn, $sql);
            #sprawdzam czy są rezultaty
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
              while ($row = mysqli_fetch_assoc($result)) { #tablica rzędów
                echo "<tr><td>" . $row["NIP"] . "</td><td>" . $row["REGON"] . "</td><td>" . $row["NAZWA"] . "</td><td>" . $row["CZY_VAT"] . "</td><td>" . $row["ULICA"] . "</td><td>" . $row["NR_DOMU"] . "</td><td>" . $row["NR_MIESZKANIA"] ."</td></tr>";
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