 	<!-- Recipes -->
<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<title>Recept - Vad ska jag laga?</title>

    	<link rel="icon" type="img/png" href="img/icon.png">

    	<!-- Init-file -->
    	<?php require_once 'core/init.php'; ?>

    	<!-- CSS-links -->
    	<?php include 'includes/data/css-links.php'; ?>
    </head>

<?php 	
	$user = new User();
	$token = Token::generate();
?>

	<body>

		<!-- Navbar -->
		<?php include 'includes/navbar.php'; ?>

		<!-- Main function -->
		<?php include 'includes/modules/recept.php'; ?>
		
		<!-- JavaScript-links -->
		<?php include 'includes/data/js-links.php'; ?>
		<script src="js/bootstrap-slider.js"></script>
		<script src="js/recept.js"></script>
		
	</body>