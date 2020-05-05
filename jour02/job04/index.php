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
		<div class="container">
			<form>
				<p class="row">
					<label class="col valign-wrapper">
						<i class="material-icons green-text">person</i>
						&nbsp;
						Civilité
					</label>
				</p>
				<p class="row">
					<label class="col">
						<input type="radio" class="with-gap" name="civility" value="man">
						<span>Mr</span>
					</label>
					<label class="col">
						<input type="radio" class="with-gap" name="civility" value="woman">
						<span>Mme</span>
					</label>
				</p>
				<div class="row">
					<div class="input-field col s6">
						<i class="material-icons blue-text text-accent-4 prefix">perm_identity</i>
						<input type="text" id="lastName" name="lastName" class="validate">
						<label for="lastName">Nom</label>
					</div>
					<div class="input-field col s6">
						<i class="material-icons blue-text text-accent-4 prefix">perm_identity</i>
						<input type="text" id="firstName" name="firstName" class="validate">
						<label for="firstName">Prénom</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<i class="material-icons orange-text prefix">mail</i>
						<input type="text" id="email" name="email" class="validate">
						<label for="email" class="valign-wrapper">E-mail</label>
					</div>
					<div class="input-field col s6">
						<i class="material-icons green-text prefix">location_on</i>
						<input type="text" id="address" name="address" class="validate">
						<label for="address">Adresse</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<i class="material-icons purple-text prefix">vpn_key</i>
						<input type="text" id="password" name="password" class="validate">
						<label for="password">Mot de passe</label>
					</div>
					<div class="input-field col s6">
						<i class="material-icons purple-text prefix">vpn_key</i>
						<input type="text" id="passwordConfirm" name="passwordConfirm" class="validate">
						<label for="passwordConfirm">Mot de passe (confirmation)</label>
					</div>
				</div>
				<div class="row">
					<label class="col valign-wrapper">
						<i class="material-icons red-text">favorite</i>
						&nbsp;
						Passions
					</label>
				</div>
				<p class="row">
					<label class="col">
						<input type="checkbox" class="filled-in" name="passion[computers]">
						<span>Informatique</span>
					</label>
					<label class="col">
						<input type="checkbox" class="filled-in" name="passion[travelling]">
						<span>Voyage</span>
					</label>
					<label class="col">
						<input type="checkbox" class="filled-in" name="passion[sports]">
						<span>Sport</span>
					</label>
					<label class="col">
						<input type="checkbox" class="filled-in" name="passion[reading]">
						<span>Lecture</span>
					</label>
				</p>
				<div class="row">
					<div class="col">
						<button class="btn" type="submit">Envoyer
							<i class="material-icons right">send</i>
						</button>
					</div>
				</div>
			</form>
		</div>
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