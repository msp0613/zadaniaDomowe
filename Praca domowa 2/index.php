<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Składowe Witryny</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<?php
			include('src/ciasteczko.php');
			include('src/sesja.php');
		?>
		<div class="row justify-content-around">
			<div class="col-md-4 mb-5">
				<form action="src/potwierdzenieGET.php" method="GET">
					<h2>
						Metoda GET
					</h2>
					<div>
						<label class="form-label" for="imie">Imie</label>
						<input name="imie" class="form-control">
					</div>
					<div>
						<label class="form-label" for="nazwisko">Nazwisko</label>
						<input name="nazwisko" class="form-control">
					</div>
					<div>
						<label class="form-label" for="email">Email</label>
						<input name="email" class="form-control">
					</div>
					<button type="submit" name="zatwierdz" class="btn btn-primary mt-3">
						Wyślij
					</button>
				</form>
			</div>
			<div class="col-md-4 mb-5">
				<form action="src/potwierdzeniePOST.php" method="POST">
				    <h2>
				      Metoda POST
				    </h2>
				    <div>
				        <label class="form-label" for="imie">Imie</label>
				        <input name="imie" class="form-control">
				    </div>
				    <div>
				        <label class="form-label" for="nazwisko">Nazwisko</label>
				        <input name="nazwisko" class="form-control">
				    </div>
				    <div>
				        <label class="form-label" for="email">Email</label>
				        <input name="email" class="form-control">
				    </div>
				    <button type="submit" class="btn btn-primary mt-3" name="zatwierdz">
				        Wyślij
				    </button>
				</form>
			</div>
		</div>

		<div class="row justify-content-around">
			<div class="col-md-4 mb-5">
				<form action="src/ciasteczkoPOST.php" method="POST">
					<div>
				       	<label class="form-label" for="imie">Imie</label>
				        <input name="imie" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary mt-3" name="zatwierdz">Zatwierdź imie</button>
				</form>
			</div>
			<div class="col-md-4 mb-5">
				<form action="src/sesjaPOST.php" method="POST">
				    <div>
				        <label class="form-label" for="nazwisko">Nazwisko</label>
				        <input name="nazwisko" class="form-control">
				    </div>
				    <button type="submit" name="zatwierdz" class="btn btn-primary mt-3">Zatwierdź nazwisko</button>
				</form>
			</div>
		</div>
		
	</div>

</body>
</html>