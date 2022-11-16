<?php 
  
$ime = $_POST['ime'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$naslov = $_POST['naslov'];
$tekst = $_POST['poruka'];




 	$date = date(DATE_RFC2822);
 	$izlaz = "Poruka poslata u : " . $date  . " od strane: " . $ime .
 "Broj telefona: " . $tel   .  
  "Poruka glasi:" . $tekst ;


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
 

 	 ?>