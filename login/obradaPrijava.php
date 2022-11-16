<?php
// prikupimo podatke sa forme
$ime = $_POST['nIme'] ?? "";
$ime = filter_var($ime,FILTER_SANITIZE_STRING);

$email = $_POST['nEmail'] ?? "";
$email = filter_var($email,FILTER_SANITIZE_STRING);
$email = filter_var($email,FILTER_VALIDATE_EMAIL);

if($email==false){
    die("Email nije ispravan!");
}

$pass = $_POST['nPass'] ?? "";
$pass = filter_var($pass,FILTER_SANITIZE_STRING);
//$pass = sha1($pass);

$rePass = $_POST['nRePass'] ?? "";
$rePass = filter_var($rePass,FILTER_SANITIZE_STRING);


// kreiramo konekciju ka bazi

$servername = "localhost";
$username = "root";
$password = "";
$db = "don22";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// povezemo podatke sa upitom za upis
$sql = "INSERT INTO `korisnici` 
(`idKorisnika`, `ime`, `email`, `sifra`, `privilegija`) 
VALUES (NULL, '$ime', '$email', SHA1('$pass'), 'korisnik');";

echo $sql;

// upisemo podatke u db
if($pass===$rePass){
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>No:".$conn->errno."->" . $conn->error;
      }
}
