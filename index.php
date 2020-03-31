<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Optional JavaScript -->
    <script src="scripts.js"></script>
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
                <a class="nav-link" href="kontrahenci.php">Dane Kontrahentów</a>
            </nav>
        </div>
        <div class="col-sm-9 d-flex align-self-center justify-content-sm-center" id="Prawy">
          <h5>© 2020 Copyright: Szymon Andrzejewski</h5>
          <br>
          <br>
          <?php
            include 'db_connection.php';
            $conn = OpenCon();
            echo "Connected Successfully";
            CloseCon($conn);
          ?>
        </div>
    </div>
  </body>
</html>