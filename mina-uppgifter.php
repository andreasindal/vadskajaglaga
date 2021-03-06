<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Mina uppgifter - Vad ska jag laga?</title>

		<link rel="icon" type="image/png" href="img/icon.png">

		<!--  Init-file and page protect -->
		<?php
		require_once 'core/init.php';
		protect();
		?>

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
		<?php include 'includes/modules/mina-uppgifter.php'; ?> 

		
		<!-- Footer -->
		<?php include 'includes/footer.php'; ?>

		<!-- JavaScript-links -->
		<?php include 'includes/data/js-links.php'; ?>
		<script>
			$('#settings').addClass('active');
		</script>
	</body>
</html>