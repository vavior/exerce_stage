<?php
	$email = (isset($_POST["email"]))?htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8'):false;
	$pw = (isset($_POST["pw"]))?htmlentities($_POST['pw'], ENT_QUOTES, 'UTF-8'):false;
	$action = (isset($_POST["action"]))?htmlentities($_POST['action'], ENT_QUOTES, 'UTF-8'):false;

	$emailOK="grumpycat@email.com";
	$pwOK="unicorn";

	if ($email == $emailOK && $pw==$pwOK) {
		$classIcon="fa-lock";
		$bouton_log=$email;
		$class_log="btn_login";
		$disabled="";
		$infobulle="Déconnectez-vous";
		$errorMessage="";

	} else {
		$classIcon="fa-unlock";
		$bouton_log="Identifiez-vous";
		$class_log="btn_logout";
		$disabled="disabled";
		$infobulle="Vous n'êtes pas connecté";
		$errorMessage="Désolé, la combinaison de ce login et ce mot de passe n'est pas bonne.";
	}

?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Front-end training - Exercice 2</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/jquery.validate.js"></script>
		<script src="js/script.js"></script>
	</head>
	<body>
		<!--<span style="color:white;" class="visible-xs">SIZE XS</span>
		<span style="color:white;" class="visible-sm">SIZE SM</span>
		<span style="color:white;" class="visible-md">SIZE MD</span>
		<span style="color:white;" class="visible-lg">SIZE LG</span>-->

		<div class="container gray">
			<header class="row white">
				<div class="logo text-center">
					<img src="img/logo.png" alt="logo"/>
				</div>
				<div class="log <?php echo $class_log; ?>">
					<!--<p class="text-center"><i class="fa <?php echo $classIcon; ?>" aria-hidden="true"></i> Identifiez-vous</p>-->
					<form class="text-center">
						<button type="submit" name="action" value="logout" class="no-style" <?php echo $disabled; ?> title="<?php echo $infobulle; ?>"><i class="fa <?php echo $classIcon; ?>" aria-hidden="true"></i> <span class="hidden-xs"><?php echo $bouton_log; ?></span></button>
					</form>	
				</div>
			</header>
			<section class="white">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1>Lorem ipsum dolor sit amet consectetur</h1>
						<p id="removeBR">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br/>sed do eiusmod tempor incididunt ut labore.</p>
					</div>
				</div>

<?php 
	if ($action=="login" && ($email != $emailOK || $pw!=$pwOK)) {
?>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<p class="text-red"><?php echo $errorMessage; ?></p>
					</div>
				</div>

<?php 
	}
?>

				<div class="row">
<?php 
	if ($email != $emailOK || $pw!=$pwOK) {
?>

					<form id="form_log" class="col-xs-offset-0 col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-6 col-lg-offset-3" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
						<div class="row">
							<div class="form-group">
							    <label class="col-xs-4 col-sm-4 col-md-4 col-lg-4" for="email">E-Mail</label>
							    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							    	<input type="email" class="" id="email" name="email" placeholder="Type here your e-mail address">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-xs-4 col-sm-4 col-md-4 col-lg-4" for="pw">Password</label>
							    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							    	<input type="password" class="" id="pw" name="pw" placeholder="Type here your password">
							    </div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-offset-0 col-xs-12 col-sm-offset-4 col-sm-8 col-md-8 col-lg-8 flex-container">
								<button type="submit" name="action" value="login" class="btn form_login">Login</button>
								<button type="submit" name="action" value="retrieve" class="btn btn-default form_pw">Retrieve password?</button>
							</div>
						</div>
					</form>

<?php 
	} else {
?>

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis ullamcorper erat eget suscipit. Proin ultricies dolor eu faucibus dignissim. Nam efficitur, urna porttitor porttitor mattis, enim ex porttitor felis, sit amet pharetra elit diam ac justo. Fusce hendrerit porta arcu eu lobortis. Etiam feugiat est sed metus finibus, eget rhoncus turpis tempor.</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<p>Donec eget libero non lectus condimentum aliquet a a massa. Nullam convallis eros id massa imperdiet imperdiet. Donec auctor vestibulum euismod. Curabitur at libero laoreet, tempus ex at, tincidunt lorem. Quisque nec ligula congue metus tempor porttitor.</p>
					</div>

<?php 
	} 
?>
				</div>
			</section>
			<footer>
				<div class="flex-container">
					<div class="flex-child no-mix orange"></div>
					<div class="flex-child mix orange_yellow"></div>
					<div class="flex-child no-mix yellow"></div>
					<div class="flex-child mix yellow_light_green"></div>
					<div class="flex-child no-mix light_green"></div>
					<div class="flex-child mix light_green_turquoise"></div>
					<div class="flex-child no-mix turquoise"></div>
					<div class="flex-child mix turquoise_green"></div>
					<div class="flex-child no-mix green"></div>
					<div class="flex-child mix green_turquoise"></div>
					<div class="flex-child no-mix turquoise2"></div>
				</div>
				<div class="nav_footer">
					<div class="display_block_xs text-right">
						<div class="link">
							<a href="#">Contact</a>
						</div>
						<div class="link no-border">
							<a href="#">Site map</a>
						</div>
					</div>
					<div class="display_block_xs text-right">
						<div class="link">
							<a href="#">Downloads</a>
						</div>
						<div class="link">
							<a href="#">Legal informations</a>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<div class="copyright">
			<p class="text-center">&copy; Emakina 2015</p>
		</div>
	</body>
</html>
