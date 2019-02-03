<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css?<?php echo date('YmdHis') ?>">

	
</head>
<body>
	<div class="container">
		<div class="form sign-in">
			<form action='index.php' method="post">
				<h2>Welkom!</h2>
					<label>
						<span>Voornaam</span>
						<input type="text" name="Naam" required/>
					</label>
					<label>
						<span>Achternaam</span>
						<input type="text" name="Last" required/>
					</label>
					<label>
						<span>Wachtwoord</span>
						<input type="password" name="Pass" required/>
					</label>

					
					<button type="submit" class="submit" name="login">Log in</button>
			</form>
		</div>

		<div class="sub-content">
			<div class="img">
				<div class="img__btn">
					<span class="m--up">Registreer</span>
					<span class="m--in">Log in</span>
				</div>
			</div>

			<div class="form sign-up">
			<form action="index.php" method="post">
				<h2>Registreer hier</h2>
				<label>
					<span>Naam</span>
					<input type="text" name="Naam" required/>
				</label>
				<label>
					<span>Achternaam</span>
					<input type="text" name="Last" required />
				</label>
				<label>
					<span>Wachtwoord</span>
					<input type="password" name="Pass" required />
				</label>
				<label>
					<input type="radio" name="gebruikerType" value='1' checked=""> Student &nbsp;
					<input type="radio" name="gebruikerType" value='2'> Docent
				</label>
				<button type="submit" class="submit" name="sign-up">Registreer</button>
			</form>
			<?php
				include_once 'registercheck.php';
			?>
			</div>
		</div>
	</div>
	<script lang="js" type="text/javascript">
		document.querySelector('.img__btn').addEventListener('click', function() {
	  		document.querySelector('.container').classList.toggle('s--signup');
	    });
	    <?php if(isset($_POST['sign-up'])): ?>
	  		document.querySelector('.container').classList.toggle('s--signup');
	  	<?php endif; ?>
	</script>
</body>
</html>