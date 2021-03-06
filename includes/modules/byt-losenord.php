<?php
require_once 'core/init.php';

$user = new User();

protect();

if (Input::exists()) {
	if (Token::check(Input::get('token'))) {

		$validate = new Validate();
		$validation = $validate->check($_POST, array(
			'password_current' => array(
				'required' => true,
				'min' => 6),
			'password_new' => array(
				'required' => true,
				'min' => 6),
			'password_new_again' => array(
				'required' => true,
				'matches' => 'password_new')
		));

		if ($validation->passed()) {
			if (Hash::make(Input::get('password_current'), $user->data()->salt) !== $user->data()->password) {
				echo '<script>alert("Ditt nuvarande lösenord är fel.");</script>';
			} else {
				$salt = Hash::salt(32);
				$user->update(array(
					'password' => Hash::make(Input::get('password_new'), $salt),
					'salt' =>$salt
				));

				Redirect::to('mina-uppgifter.php?change=password');
			}
		}
	}
}
?>


	<header>
			<section class="header">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="well well-lg main-section">
								<h1>Byt lösenord</h1>
								<div class="row">
									<div class="col-md-12 alert alert-danger change-pw-alert" id="error-empty"><span class="glyphicon glyphicon-exclamation-sign"></span> Du måste fylla i alla fält</div>
									<div class="col-md-12 alert alert-danger change-pw-alert" id="error-current"><span class="glyphicon glyphicon-exclamation-sign"></span> Ditt nuvarande lösenord är fel</div>
									<div class="col-md-12 alert alert-danger change-pw-alert" id="error-repeat"><span class="glyphicon glyphicon-exclamation-sign"></span> Lösenorden stämmer inte överens</div>
									<div class="col-md-12 alert alert-danger change-pw-alert" id="error-length"><span class="glyphicon glyphicon-exclamation-sign"></span> Ditt nya lösenord måste vara minst 6 tecken</div>
									<div class="col-md-12">
										<form action="" id="change-password-form" method="post" class="form-horizontal">
											<fieldset>
												<label for="pw_cur">Nuvarande lösenord:</label>
												<input type="password" name="password_current" id="pw_cur" class="form-control" required>
												<br>
												<label for="pw_new">Nytt lösenord:</label>
												<input type="password" name="password_new" id="pw_new" class="form-control" required>
												<div style="margin-top: 10px"></div>
												<label for="pw_new_r">Upprepa nytt lösenord:</label>
												<input type="password" name="password_new_again" id="pw_new_r" class="form-control" required>
												<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
												<br><br>
												<div class="col-xs-6 center">
													<button id="btn-change" class="btn btn-success"><span class="fa fa-check"></span> Spara</button>
												</div>
												<div class="col-xs-6 center">
													<a href="mina-uppgifter.php" class="btn btn-danger"><span class="fa fa-close"></span> Tillbaka</a>
												</div>
											</fieldset>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- Vad ska jag laga -->
							<ins class="adsbygoogle"
							     style="display:block"
							     data-ad-client="ca-pub-2210940611345808"
							     data-ad-slot="2194676377"
							     data-ad-format="auto"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						</div>
					</div>
				</div>
			</section>
		</header>
