<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">

		<link rel="icon" type="image/png" href="img/icon.png">

		<title>Adminpanel - Vad ska jag laga?</title>

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="admin/css/admin.css">
	</head>
	<body>

		<?php
			require_once 'core/init.php';
			$user = new User();

			admin();
		?>

		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Adminpanel</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">Tillbaka till startsidan</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 col-md-2 sidebar">
					<ul class="nav nav-sidebar">
						<li id="a-start"><a href="?p=start">Översikt</a></li>
						<li id="a-message"><a href="?p=message">Meddelanden</a></li>
					</ul>
					<h4>Recept</h4>
					<ul class="nav nav-sidebar">
						<li id="r-list"><a href="?p=r-list">Lista recept</a></li>
						<li id="r-add"><a href="?p=r-add">Lägg till recept</a></li>
						<li id="r-sent"><a href="?p=r-sent">Inskickade recept</a></li>
					</ul>
					<h4>Ingredienser</h4>
					<ul class="nav nav-sidebar">
						<li id="i-list"><a href="?p=i-list">Lista ingredienser</a></li>
						<li id="i-add"><a href="?p=i-add">Lägg till ingrediens</a></li>
					</ul>
					<h4>Användare</h4>
					<ul class="nav nav-sidebar">
						<li id="u-list"><a href="?p=u-list">Lista användare</a></li>
						<li id="u-bans"><a href="?p=u-bans">Avstängningar</a></li>
						<li id="u-ip-bans"><a href="?p=u-ip-bans">IP-bansystem</a></li>
						<li id="u-reports"><a href="?p=u-reports">Anmälningar</a></li>
					</ul>
				</div>
			</div>

			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<div class="hide-mob">
				<?php
					if (Input::exists('get')) {
						switch (Input::get('p')) {
							case 'start': include 'admin/modules/start.php';
							break;

							case 'message':
								if (Input::get('id') != '') {
									include 'admin/modules/meddelande.php';
								} else {
									include 'admin/modules/meddelande-lista.php';
								}
							break;

							case 'r-start': include 'admin/modules/recept-oversikt.php';
							break;

							case 'r-list':
								if (Input::get('id') != '') {
									include 'admin/modules/recept.php';
								} else {
									include 'admin/modules/recept-lista.php';
								}
							break;

							case 'r-sent': include 'admin/modules/recept-inskickade.php';
							break;

							case 'r-add': include 'admin/modules/recept-lagg-till.php';
							break;

							case 'i-list':

								if(Input::get('id') != ''){
									include 'admin/modules/ingrediens.php';

								} else {
									include 'admin/modules/ingrediens-lista.php';
								}

							break;

							case 'i-add': include 'admin/modules/ingrediens-lagg-till.php';
							break;

							case 'u-start': include 'admin/modules/user-oversikt.php';
							break;

							case 'u-list':

								if (Input::get('id') != ''){
									include 'admin/modules/user.php';

								}else{
									include 'admin/modules/user-lista.php';
								}

							break;

							case 'u-bans': include 'admin/modules/user-bans.php';
							break;

							case 'u-ip-bans': include 'admin/modules/user-ip-bans.php';
							break;

							case 'u-reports': include 'admin/modules/user-reports.php';
							break;

							default: include 'admin/modules/start.php';
							break;
						}
					} else {
						include 'admin/modules/start.php';
					}
				?>
				</div>
				<div class="mob-only">
					Administratörspanelen är inaktiverad för mobila enheter.
				</div>
			</div>

			<script>

			</script>
		</div>
	</body>
</html>
