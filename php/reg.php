<div class="row">
	<div class="col-md-6"> <!-- leva strana prikaza -->
		<div class="page-header">
			<h2>Registruj se</h2>
		</div>

		<!-- PHP -->

		<form method="post" action="registracija.php">
			<?php 

			$mysqli = new mysqli("localhost", "root", "", "reg");
			if ($mysqli->error) 
			{
				die("Greska: " . $mysqli->error);
			}
			$ime = "";
			$prezime = "";
			$email = "";
			$password1 = "";

 			// registracija korisnika

			if (isset($_POST['dodaj'])) 
			{
				if ((!$_POST['ime']) || (!$_POST['prezime']) || (!$_POST['email']) || (!$_POST['password1']))
				{
					echo "Mora biti uneto ime, prezime, email i passwordi!!!";
				}
				else
				{
					$upitdod = "INSERT INTO profil (ime,prezime,email,password1)
					VALUES ('" . $_POST['ime']
					.	"','" . $_POST['prezime']
					.	"','" . $_POST['email']
					.	"','" . $_POST['password1'] . "')";
						$rezd = $mysqli->query($upitdod);

					if ($rezd) 
					{
						

			?> <!-- zatvaramo php kako bi umetnuli html kod -->
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Success!</strong> <strong>Uspesno ste se registrovali!</strong>
			</div>
			<!-- sada otvaram php kako bih rekao korisniku da se nije uspesno registrovao -->
			<?php 
		}
		else
		{	
			?> <!-- zatvaramo php kakobi korisniku dali poruku za neuspesnu registraciju -->
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Danger!</strong> <strong>Niste se registrovali!</strong>
			</div>
			<?php 
				}	
				}
				}
			 ?>


			<!-- HTML FORMA -->
			<div class="form-group">
				<label for="ime">Vaše ime</label>
				<input type="text" class="form-control" id="ime" name="ime" value="<?php echo $ime ?>" placeholder="Unesite ime" required>
			</div>
			<div class="form-group">
				<label for="prezime">Vaše prezime</label>
				<input type="text" class="form-control" id="prezime" name="prezime" value="<?php echo $prezime ?>" placeholder="Unesite prezime" required>
			</div>
			<div class="form-group">
				<label for="email">email adresa</label>
				<input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>" placeholder="Unesite e-mail adresu" required>
			</div>
			<div class="form-group">
				<label for="password1">Password</label>
				<input type="password" class="form-control" id="password1" name="password1" value="<?php echo $password1 ?>"placeholder="Unesite Password" required>
			</div>
			<div class="form-group">
				<label for="password2">Password</label>
				<input type="password" class="form-control" id="password2" name="password2" value="<?php echo $password2 ?>" placeholder="Ponovite Password" required>
			</div>
			<button type="submit" name="dodaj" value="dodaj" class="btn btn-warning btn-lg btn-block"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> Registruj se</button>
		</div>


		<div class="col-md-6"> <!-- desna strana prikaza -->
			<div class="page-header">
				<h2>Uloguj se</h2>
			</div>
			<div class="form-group">
				<label for="email">email adresa</label>
				<input type="email" class="form-control" id="email" placeholder="Unesite e-mail adresu">
			</div>
			<div class="form-group">
				<label for="Password">Password</label>
				<input type="password" class="form-control" id="password" placeholder="Unesite Password">
			</div>
			<button type="submit" name="submit2" class="btn btn-success btn-lg btn-block">Uloguj se <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>
		</div> <!-- kraj desne strane -->
</div> <!-- kraj podele prikaza -->