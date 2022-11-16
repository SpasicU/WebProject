
<!-- Page Content  -->
<form method="post">
<div id="content" align="center" class="p-4 p-md-5 pt-5"> 
  <h2 class="mb-4">Zakazane dekoracije!</h2>
  <p style="font-size: 16px;" class="panel-body">U tabeli su ispisane zakazane dekoracije koje možete pregledati. Da bi izbrisali dekoraciju koja je vec završena unesite datum dekoracije u polje i pritisnite dugme izbriši.</p>
  <br><br>
  <div class="row" style="margin-left: 30px;">

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
        echo "<table cellpadding=10 border=2 height=40px>";
        echo "<tr><th>Ime i prezime</th><th>Broj</th><th>Email</th><th>Tip</th><th>Paket</th><th>Datum</th><th>Adresa</th><th>Zahtevi</th></tr>";
        while($red = $rezultat->fetch_array()) {
          echo "<tr>";
          echo "<td>".$red[0]."</td>";
          echo "<td>".$red[1]."</td>";
          echo "<td>".$red[2]."</td>";
          echo "<td>".$red[3]."</td>";
          echo "<td>".$red[4]."</td>";
          echo "<td>".$red[5]."</td>";
          echo "<td>".$red[6]."</td>";
          echo "<td>".$red[7]."</td>";
          echo "</tr>";
        }
        echo "</table>";
      }
      else {
// ne stampaj statusnu poruku
        echo "Nijedan red nije vracen!";
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

  <div>
    <br>
    <input type="text" name="datumBrisi" placeholder="Upišite ovde datum">
    <button type="submit" name="brisi">Izbriši</button>
  </div>
</form>

  <?php 

  $mysqli = new mysqli("localhost","root","","poruci");

  if ($mysqli->error) 
  {
    die("Greska! " . $mysqli->error);
  }


  if (isset($_POST['brisi'])) 
  {
   $upitbrisi = "DELETE from dekoracija where datum = '". $_POST['datumBrisi']."'";
   $rezb=$mysqli->query($upitbrisi);
   if (!$rezb) 
   {
     print("Ne mozemo izvrsiti brisanje. Probajte ponovo!");
     die($mysqli->error);
   }

   print("Obrisano redova: \n" . $mysqli->affected_rows);
   $imePrezime = "";
   $broj = "";
   $email = "";
   $tip = "";
   $paket = "";
   $datum = "";
   $adresa = "";
   $zahtevi = "";


   if ($mysqli->affected_rows!=0) 
   {
    ?>
    <br>
    <div class="col-md-6">
      <div class="alert alert-success" role="alert">
        <strong>Obrisali ste uspešno!</strong>
      </div>
    </div>
    <br><br><br><br>
    <?php 
  }
}


?>

</div>

