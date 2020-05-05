<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>Document</title>
</head>
<body>
	<header>
		<nav>
			<div class="nav-wrapper teal">
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="index.php">Accueil</a></li>
					<li><a href="index.php">Inscription</a></li>
					<li><a href="index.php">Connexion</a></li>
					<li><a href="index.php">Rechercher</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<main>
	<form>
			<label for="civility">Civilité</label>
			<input type="radio" id="radio-mr" name="civility" value="man">
			<label for="radio-mr">Mr</label>
			<input type="radio" id="radio-mme" name="civility" value="woman">
			<label for="radio-mme">Mme</label>
			<label for="lastName">Nom</label>
			<input type="text" name="lastName">
			<label for="firstNaùe">Prénom</label>
			<input type="text" name="firstName">
			<label for="address">Adresse</label>
			<input type="text" name="address">
			<label for="email">E-mail</label>
			<input type="text" name="email">
			<label for="password">Mot de passe</label>
			<input type="text" name="password">
			<label for="passwordConfirm">Mot de passe (confirmation)</label>
			<input type="text" name="passwordConfirm">
			<label>Passions</label>
			<input type="checkbox" id="passion-computers" name="passion[computers]">
			<label for="passion-computers">Informatique</label>
			<input type="checkbox" id="passion-travelling" name="passion[travelling]">
			<label for="passion-travelling">Voyage</label>
			<input type="checkbox" id="passion-sports" name="passion[sports]">
			<label for="passion-sports">Sport</label>
			<input type="checkbox" id="passion-reading" name="passion[reading]">
			<label for="passion-reading">Lecture</label>
			<input type="submit" value="Envoyer">
		</form>
	</main>
	<footer class="page-footer teal">
		<div class="container">
			<div class="row">
				<div class="col offset-s8">
					<h5 class="white-text">Navigation</h5>
					<ul>
						<li><a class="grey-text text-lighten-3" href="index.php">Accueil</a></li>
						<li><a class="grey-text text-lighten-3" href="index.php">Inscription</a></li>
						<li><a class="grey-text text-lighten-3" href="index.php">Connexion</a></li>
						<li><a class="grey-text text-lighten-3" href="index.php">Rechercher</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container"></div>
		</div>
	</footer>
</body>
</html>