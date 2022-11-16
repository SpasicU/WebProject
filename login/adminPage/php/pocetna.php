<!-- Page Content  -->


<div id="content" align="center" class="p-4 p-md-5 pt-5">
  <h2 class="mb-4">Dobrodošli na vašu admin stranicu!</h2>
  <p style="font-size: 16px;" class="panel-body">Ovo je vaša stranica na kojoj možete videti sve poruke i dekoracije koje su korisnici poslali odnosno zakazali. Sa leve strane imate navigaciju gde možete pristupiti detaljima. </p>
  <br><br>
  <div class="row">

    <div class="col-xs-6 col-md-6">
      <div class="jumbotron" style="padding: 2rem 1rem; margin-top: 20px;">
        <h3><u>Zakazane</u></h3>
        <p>Pritisnite dugme ispod da vidite zakazane dekoracije!</p>
        <p><a class="btn btn-default btn-lg" href="zakazane.php" role="button">Otvori &#8702;</a></p>
      </div>
    </div> <!-- kraj levog bloka -->
    

    <div class="col-xs-6 col-md-6">
      <div class="jumbotron" style="padding: 2rem 1rem; margin-top: 20px;">
        <h3><u>Poruke</u></h3>
        <p>Pritisnite dugme ispod da vidite pitanja i poruke klijenata!</p>
        <p><a class="btn btn-default btn-lg" href="pitanja.php" role="button">Otvori &#8702;</a></p>
      </div>
    </div>

  </div>


</div>


<div id="content" class="p-2 p-md-4 pt-4" style="width: 30em;">
  <h3 class="mb-4" style="margin-top: 25px;">Klijenti</h3>
  <p> Ovde su vam ispisane aktuelne dekoracije koje tek trebaju biti odrađene:</p>


  <?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $baza = "poruci";

// napravi mysqli objekat i otvori konekciju prema bazi
  $mysqli = new mysqli($host, $user, $pass, $baza);
// da li je bilo gresaka?
  if (mysqli_connect_errno()) {
    die("Nije moguca konekcija!");
  }
// napravi upit
  $upit = "SELECT * FROM dekoracija";
// izvrsi upit
  $rezultat = $mysqli->query($upit);
  if ($rezultat) {
//da li je bilo sta vraceno?
    if ($rezultat->num_rows > 0) {
// da stampaj jednu po jednu u obliku tabele
      while($red = $rezultat->fetch_array()) {
        echo "<li>".$red[0]." - ". $red[4]."</li>";      
      }

    }
    else {
// ne stampaj statusnu poruku
      echo "Nijedna dekoracija nije vracena!";
    }
// oslobodi memoriju
    $rezultat->close();
  } else {
// stampaj poruku o gresci
    echo "Greska u upitu: $upit. ".$mysqli->error;
  }
// zatvori konekciuju
  $mysqli->close();

  ?>


</div> 



