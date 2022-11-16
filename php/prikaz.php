<div class="row"> <!-- podela prikaza -->
  <div class="col-md-6">
    <h2 class="page-header">
      Kontakt
    </h2>

    <form method="post"> <!-- pocetak forme -->
      <div class="form-group">
        <label for="inputName">Vaše ime i prezime</label>
        <input type="text" class="form-control"  name="ime" placeholder="Upišite Vaše ime i prezime">
      </div>
      <div class="form-group">
        <label for="inputEmail">Vaš e-mail</label>
        <input type="email" class="form-control"  name="email" placeholder="Upišite Vaš e-mail">
      </div>
      <div class="form-group">
        <label for="inputTel">Vaš telefonski broj</label>
        <input type="tel" class="form-control"  name="tel" placeholder="Upišite Vaš telefonski broj">
      </div>
      <div class="form-group">
        <label for="inputSubject">Naslov poruke</label>
        <input type="text" class="form-control"  name="naslov" placeholder="Naslov Vaše poruke">
      </div>
      <div class="form-group">
        <label for="inputText">Tekst poruke (do 300 karaktera)</label>
        <textarea class="form-control" rows="5" name="poruka"></textarea>
      </div>
      <button type="submit" class="btn btn-success btn-lg btn-block" name="posalji" ><b>Pošalji</b></button>
    </form> <!-- kraj forme -->
  </div> 

  <div class="col-md-6">
    <h2 class="page-header">
      Gde se nalazimo
    </h2>
    <p><i class="fas fa-map-marker" aria-hidden="true"></i> Požeška 158, Beograd, 11030 </p>
    <p><i class="fas fa-phone" aria-hidden="true"></i> +381 65 6389 265</p>
    <p><i class="fas fa-envelope" aria-hidden="true"></i> uspasic2000@gmail.com</p>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2832.3895560807455!2d20.413507522543817!3d44.772862921541964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a6e2cf01ef2e9%3A0x160deeb9c6f4d83b!2sPo%C5%BEe%C5%A1ka%20158%2C%20Beograd%2011030!5e0!3m2!1sen!2srs!4v1637321858888!5m2!1sen!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

  </div>

</div> <!-- kraj podele prikaza -->




<?php 


$mysqli = new mysqli("localhost","root","","poruke");

if ($mysqli->error) 
{
  die("Greska! " . $mysqli->error);
}

$ime = "";
$email = "";
$tel = "";
$naslov = "";
$poruka = "";


if(isset($_POST['posalji'])) 
{
  if (!($_POST["ime"]) ||  !($_POST["email"]) || !($_POST["tel"]) || !($_POST["naslov"]) || !($_POST["poruka"])) 
  {
    ?>
    <div class="col-md-6">
      <div class="alert alert-warning" role="alert">
        <strong>Greška!</strong>, niste uneli sve podatke!!
      </div>
    </div>
    <?php 

  }
  else
  {
    $upit2 = "INSERT INTO tabela (ime,email,tel,naslov,poruka)
    VALUES ('" 
     . $_POST["ime"] . "','" 
     . $_POST["email"] . "','"
     . $_POST["tel"] . "','"
     . $_POST["naslov"] . "','"
     . $_POST["poruka"] .  "')";

     $rez=$mysqli->query($upit2);

     if (!$rez) 
     {
      die("GRESKA!! " . $mysqli->error);
    }
    else
    {
      ?>
      <div class="col-md-6">
        <div class="alert alert-success" role="alert">
          <strong>Uspešno poslato</strong>, hvala Vam na ukazanom poverenju!!
        </div>
      </div>
      <?php 
    }
    
  }


$ime = $_POST['ime'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$naslov = $_POST['naslov'];
$tekst = $_POST['poruka'];




$date = date(DATE_RFC2822);
$izlaz = "Poruka poslata u : " . $date  . " od strane: " . $ime .
" Broj telefona: " . $tel   .  
" Poruka glasi: " . $tekst . "\n\n";


$fp = fopen("kontakt.txt", "a");
flock($fp, LOCK_EX);
if (!$fp) 
{
  print("Morate upisati nesto!");
  exit;
}
fwrite($fp, $izlaz, strlen($izlaz));
flock($fp, LOCK_UN);
fclose($fp);

} 

// die();




?>
