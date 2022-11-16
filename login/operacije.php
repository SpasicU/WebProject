<div id="content" align="center">
  <h2 class="mb-4">Dobrodošli u svet Bellissimo dekoracija!</h2>
  <p style="font-size: 16px;" class="panel-body">Ovde ste jer planirate da vaš specijalan dan učinite nezaboravnim uz pomoć dekoracije? Na pravom ste mestu! To je upravo ono čime se mi bavimo. Svadbe, rođendani, proslave... kontaktirajte nas da zajedno napravimo prelepu dekoraciju!</p>
  <br><br>
  <div class="row">

    <div style="border-left: 1px solid black;">
      <div align="center">
        <i class="fa-solid fa-gem fa-2x"
        style="border: 1px solid black; border-radius: 2.75em;
        display: inline-block;
        height: 2em;
        line-height: 2em;
        width: 2em;"></i>
        <h3>Kupci</h3>
        <p>Naš tim nudi najbolje i najbrže usluge u gradu, obećavamo vam raskošnu dekoraciju iz vaših snova!!</p>



        <?php  

        session_start();

        if(empty($_SESSION['user']))
        {
          echo "<a href='login.html'>Link za logovanje</a><br>";
          die("Niste ulogovani!");
        }


        echo "Vi ste ulogovani kao: ".$_SESSION['user'];
        echo " <a href='logout.php'>Logout</a><br>";

//konekcija
        require_once "konekcija.php";

        $conn = new mysqli("localhost", "root", "", "poruci");

        if ($conn->connect_error) 
        {
          die("Connection failed: " . $conn->connect_error);
        }



// sql za citanje podataka iz baze
        $sql = "SELECT * FROM `dekoracija`";

        $result = $conn->query($sql);

//var_dump($result);

        if ($result->num_rows > 0) {

          echo "<table border=1>";
          echo "<tr><th>id</th>";
          echo "<th>ime</th>";
          echo "<th>email</th>";
          echo "<th>privilegija</th>";
          echo "<th>admin</th></tr>";
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row['imePrezime']."</td>";
            echo "<td>".$row['broj']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['tip']."</td>";
            echo "<td>".$row['paket']."</td>";
            echo "<td>".$row['datum']."</td>";
            echo "<td>".$row['adresa']."</td>";
            echo "<td>".$row['zahtevi']."</td>";
            echo "<td>
            <a href='izmena.php?id=".$row['idKorisnika']."'>izmena</a>
            </td></tr>";

          }
          echo "</table>";
        } else {
          echo "nema podataka";
        }
        $conn->close();

        ?>



      </div>
    </div>
  </div>
</div>

