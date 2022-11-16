

<!-- Page Content  -->
<form method="post">
<div id="content" align="center" class="p-4 p-md-5 pt-5"> 
  <h2 class="mb-4">Pitanja klijenta!</h2>
  <p style="font-size: 16px;" class="panel-body">U tabeli su ispisane poruke koje su posetioci na web stranici slali na kontakt strani. Da bi izbrisali pitanje na koje ste odgovorili, upisite broj telefona iz tabele u polje i pritisnite dugme izbriši.</p>
  <br><br>
  <div class="row" style="margin-left: 120px;">

    <?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $baza = "poruke";

// napravi mysqli objekat i otvori konekciju prema bazi
    $mysqli = new mysqli($host, $user, $pass, $baza);
// da li je bilo gresaka?
    if (mysqli_connect_errno()) {
      die("Nije moguca konekcija!");
    }
// napravi upit
    $upit = "SELECT * FROM tabela";
// izvrsi upit
    $rezultat = $mysqli->query($upit);
    if ($rezultat) {
//da li je bilo sta vraceno?
      if ($rezultat->num_rows > 0) {
// da stampaj jednu po jednu u obliku tabele
        echo "<table cellpadding=10 border=2 height=40px>";
        echo "<tr><th>Ime</th><th>Email</th><th>Telefon</th><th>Naslov</th><th>Poruka</th></tr>";
        while($red = $rezultat->fetch_array()) {
          echo "<tr>";
          echo "<td>".$red[0]."</td>";
          echo "<td>".$red[1]."</td>";
          echo "<td>".$red[2]."</td>";
          echo "<td>".$red[3]."</td>";
          echo "<td>".$red[4]."</td>";
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
   $upitbrisi = "DELETE from tabela where tel = '". $_POST['tel']."'";
   $rezb=$mysqli->query($upitbrisi);
   if (!$rezb) 
   {
     print("Ne mozemo izvrsiti brisanje. Probajte ponovo!");
     die($mysqli->error);
   }

   print("Obrisano redova: \n" . $mysqli->affected_rows);
   $ime = "";
   $email = "";
   $tel = "";
   $naslov = "";
   $poruka = "";


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