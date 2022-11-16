<style>

  button
  {
    padding: 12px;
    border-radius: 0.5em;
    border: 0.5px solid #777777;
    margin-top: 0.7em;
    transition-duration: 0.4s;
    text-align: center;
    width: 130px;

  }

  button span:after {
    content: "\00bb\00bb";
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }

  button span {
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }


  button:hover span {
    padding-right: 25px;
  }

  button:hover span:after {
    opacity: 1;
    right: 0;
  }

  


</style>
<div>
<div class="row">

  <div class="col-md-5">

    <br>
    <legend>
      <h2>Unesite Vaše podatke</h2>
    </legend>

    <form method="post">
      <div class="form-group">
        <label for="inputName">Vaše ime i prezime</label>
        <input type="text" class="form-control"  name="imePrezime" placeholder="Upišite Vaše ime i prezime">
      </div>
      <div class="form-group">
        <label for="inputEmail">Vaš e-mail</label>
        <input type="email" class="form-control"  name="email" placeholder="Upišite Vaš e-mail">
      </div>
      <div class="form-group">
        <label for="inputTel">Vaš telefonski broj</label>
        <input type="tel" class="form-control"  name="broj" placeholder="Upišite Vaš telefonski broj">
      </div>

      <legend>Kakvu dekoraciju želite?</legend>

      <div class="form-group">
        <label>Tip dekoracije
          <select name="tip" class="form-control">
            <option value="" selected="selected" class="form-control">Izaberite jedno</option>
            <option value="svadba" class="form-control">Svadba</option>
            <option value="rodjendan" class="form-control">Rođendan</option>
            <option value="ostalo" class="form-control">Ostalo</option>
          </select>
        </label> 
      </div>

      <div class="form-group">
        <label>Paket
          <select name="paket" class="form-control">
            <option value="" selected="selected" class="form-control">Izaberite paket</option>
            <option value="najjeftiniji" class="form-control">Najjeftiniji</option>
            <option value="srednji" class="form-control">Srednji</option>
            <option value="najskuplji" class="form-control">Najskuplji</option>
          </select>
        </label> 
      </div>


      <div class="form-group">
        <label for="inputSubject">Datum slavlja</label>
        <input type="text" class="form-control"  name="datum" placeholder="23.12.2022">
      </div>


      <div class="form-group">
        <label for="inputSubject">Adresa</label>
        <input type="text" class="form-control"  name="adresa" placeholder="Adresa dekoracije">
      </div>

      <div class="form-group">
        <label for="inputSubject">Specijalni zahtevi?</label>
        <textarea class="form-control" rows="5" name="zahtevi"></textarea>
      </div>
      <p style="font-size: 10px;"><i>*Za ažuriranje ili otkazivanje, upišite datum koji ste prethodno zakazali!</i></p>
      <button type="submit" name="zakazi" style="margin-left: 10px"><span>Zakaži!!</span></button>
      <button type="submit" name="azuriraj" style="margin: 0px 10px 0px 10px;"><span>Ažuriraj</span></button>
      <button type="submit" name="otkazi"><span>Otkaži</span></button>

    </form>


  </div>




  <!--  DESNA STRANA -->

  <style>

    legend
    {
      border-bottom: 1px solid black;
    }

  </style>

  <br>


  <div class="col-md-7">
    <legend><h2>Informacije</h2></legend>

    <p>
      U našoj ponudi se nalaze 3 paketa aranžmana, cene svakog možete videti na tabeli ispod.
      Trudimo se da prilagodimo dekoracije svačijem ukusu i džepu. U zavisnosti koja je dekoracija u
      pitanju, u nastavku teksta je kratak opis svakog od paketa. <b>Imajte na umu da je svaka dekoracija 
      specifična i prilagođena vašem ukusu.</b> Zato Vas ohrabrujemo da zakažete dekoraciju i zajedno je osmislimo! Naš tim će vas kontaktirati
      u najkraćem roku gde možemo osmisliti jedinstvenu dekoraciju i učinimo da Vaša proslava izgleda bajkovito!<br><br>
      <u><b>Najjeftiniji paket</b></u> obuhvata osnovnu dekoraciju, perfektna i jednostavna
      dekoracija koja će svakako ulepšati vaš prostor i učiniti ga lepšim. Odlična je za stan ili kuću, u kojoj  je prostor ograničen. 
      Mi ćemo ga maksimalno iskoristiti i osmisliti prelepu dekoraciju!!<br>
      <u><b>Srednji paket</b></u> je paket koji se najčešće prodaje! Raskošna dekoracija od koje će vam stati pamet. Veštačko cveće, slatki sto, baloni, konfete,
      pozadine... Odličan izbor za prostor koji neće ograničavati veličinu dekoracije. Ovo je paket za vas ukoliko je proslava u većoj sali, a želite da dekoracija
      bude raskošna!<br>
      <u><b>Najskuplji paket!</b></u> Naša preporuka! Ukoliko želite da vaša proslava bude događaj godine onda je ovo paket za vas. Napravićemo dekoraciju koja
      će izgledati kao iz bajke. Ekstravagantna, neskvakidašnja, egzotična, očaravajuća. Samo neki od komentara koje smo dobili za dekoracije ove veličine.

    </p>

    <div>

      <h3>Cene različitih paketa:</h3>
      <table class="table table-hover">
        <tr>
          <th>#</th>
          <th>Najjeftiniji</th>
          <th>Srednji</th>
          <th>Najskuplji</th>
        </tr>
        <tr>
          <th>Svadbe</th>
          <td>300€</td>
          <td>600€</td>
          <td>1000€ +</td>
        </tr>
        <tr>
          <th>Rođendani</th>
          <td>50€</td>
          <td>100€</td>
          <td>200€ +</td>
        </tr>
        <tr>
          <th>Ostalo</th>
          <td>50€</td>
          <td>100€</td>
          <td>200€ +</td>
        </tr>
      </table>

    </div>

    <p>Ne pravite svadbu ili rođendan? Obeležite <b>ostalo</b>, i napišite u specijalnim zahtevima pojedinosti vaše dekoracije. Mi se bavimo proslavama raznih tema, samim tim ne
    ustručavajte se i budite kreativni!! Dan zaljubljenih, krštenja, momačke/devojačke večeri, poslovne žurke... mi smo tu da vam ispunimo svaku želju, i ulepšamo svaku proslavu!!</p>
    <label  style="border-top: 1px solid #333; 
    margin-top: 10px; 
    padding: 10px 0px 10px 0px;"">
    Vaše BELLISSIMO dekoracije!! <span class="glyphicon glyphicon-heart" aria-hidden="true">
    </span></label>
  </div>

</div>




<?php 


$mysqli = new mysqli("localhost","root","","poruci");

if ($mysqli->error) 
{
  die("Greska! " . $mysqli->error);
}

$imePrezime = "";
$broj = "";
$email = "";
$tip = "";
$paket = "";
$datum = "";
$adresa = "";
$zahtevi = "";


if(isset($_POST['zakazi'])) 
{
  if (!($_POST["imePrezime"]) || !($_POST["broj"]) || !($_POST["email"]) || !($_POST["tip"]) || !($_POST["paket"]) || !($_POST["datum"]) || !($_POST["adresa"]) || !($_POST["zahtevi"]) )
  {
    ?>
    <br>
    <div class="col-md-6">
      <div class="alert alert-danger" role="alert">
        <strong>Greška!</strong>, niste uneli sve podatke!!
      </div>
    </div>
    <br><br><br><br>
    <?php 

  }
  else
  {
    $upit = "INSERT INTO dekoracija (imePrezime, broj, email, tip, paket, datum, adresa, zahtevi)
    VALUES ('" 
     . $_POST["imePrezime"] . "','" 
     . $_POST["broj"] . "','" 
     . $_POST["email"] . "','" 
     . $_POST["tip"] . "','"
     . $_POST["paket"] . "','"
     . $_POST["datum"] . "','"
     . $_POST["adresa"] . "','"
     . $_POST["zahtevi"] . "')";

     $rez=$mysqli->query($upit);

     if (!$rez) 
     {
      die("GRESKA!! " . $mysqli->error);
    }
    else
    {
      ?>
      <br>
      <div class="col-md-6">
        <div class="alert alert-success" role="alert">
          <strong>Uspešno poslato</strong>, hvala Vam na ukazanom poverenju!!
        </div>
      </div>
      <br><br><br><br>
      <?php 
    }

  }
}


elseif (isset($_POST['azuriraj'])) 
{
  if (!($_POST["imePrezime"]) || !($_POST["broj"]) || !($_POST["email"]) || !($_POST["tip"]) || !($_POST["paket"]) || !($_POST["datum"]) || !($_POST["adresa"]) || !($_POST["zahtevi"]) )
  {
    ?>
    <br>
    <div class="col-md-6">
      <div class="alert alert-danger" role="alert">
        <strong>Greška!</strong>, niste uneli sve podatke!!
      </div>
    </div>
    <br><br><br><br>
    <?php 

  }

  else
  {
    $upit2 = "UPDATE dekoracija SET
    imePrezime = '".$_POST['imePrezime']."',
    broj = '".$_POST['broj']."',
    email = '".$_POST['email']."',
    tip = '".$_POST['tip']."',
    paket = '".$_POST['paket']."',
    datum = '".$_POST['datum']."',
    adresa = '".$_POST['adresa']."',
    zahtevi = '".$_POST['zahtevi']."'
    WHERE datum = '".$_POST['datum']."'";


    if(!($rez=$mysqli->query($upit2))) 
    {
      print("Ne moze se izvrsiti azuriranje tabele");
      die($mysqli->error);
    }
    else
    {
     ?>
     <br>
     <div class="col-md-6">
      <div class="alert alert-success" role="alert">
        <strong>Ažuriranje je uspešno</strong>, hvala Vam na ukazanom poverenju!!
      </div>
    </div>
    <br><br><br><br>
    <?php 
  }


}

$imePrezime = $_POST['imePrezime'];
$broj = $_POST['broj'];
$email = $_POST['email'];
$tip = $_POST['tip'];
$paket = $_POST['paket'];
$datum = $_POST['datum'];
$adresa = $_POST['adresa'];
$zahtevi = $_POST['zahtevi'];

}

elseif (isset($_POST['otkazi'])) 
{
 $upitbrisi = "DELETE from dekoracija where datum = '". $_POST['datum']."'";
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
      <strong>Otkazali ste dekoraciju!</strong>
    </div>
  </div>
  <br><br><br><br>
  <?php 
}

}





?>