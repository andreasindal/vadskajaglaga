		<header>
			<section class="header">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<div class="well well-lg main-section">
								<h1>Logga in</h1>
<?php
						if (Input::exists('get')) {
							if (Input::get('login') == 'false') {
?>
								<div class="row">
									<div class="col-md-12">
										<div class="alert alert-danger" role="alert">
											<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
											<span class="sr-only">Fel:</span>
											Du har angett felaktiga inloggningsuppgifter.
										</div>
									</div>
								</div>
<?php
							} else {
								Redirect::to(404);
							}
						}
?>
								<div class="row">
									<div class="col-md-2"></div>
									<div class="col-md-8">
										<form action="login-router.php" method="post" class="form-horizontal">
											<fieldset>
												<div class="row">
													<div class="col-md-12">
														<label for="input_email">E-post</label>
														<input type="email" name="email" class="form-control" id="input_email" placeholder="sven.ekdahl@hemsida.se" required>
														<br>
													</div>
													<div class="col-md-12">
														<label for="input_password">Lösenord</label>
														<input type="password" name ="password" class="form-control" id="input_password" placeholder="********" required>
														<br>
													</div>
												</div>
												<div class="remember">
													<input type="checkbox" name ="remember" id="remember" checked>
													<label for="remember"><abbr title="Om du kryssar i denna ruta kommer du loggas in automatiskt nästa gång du besöker sidan.">Kom ihåg mig</abbr></label>
													<a href="glomt-losenord.php" class="right">Glömt lösenord</a>
													<br><br>
													<input type="hidden" name="token" value="<?php echo $token ?>">
												</div>
												<div class="row">
													<div class="col-md-12">
														<button type="submit" class="btn btn-success"><span class="fa fa-sign-in"></span> Logga in</button>
														<a class="btn btn-default right" href="registrera.php" id="register"><span class="fa fa-pencil"></span> Registrera dig</a>

													</div>
												</div>
												<br>
											</fieldset>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
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