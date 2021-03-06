		<header>
			<section class="header">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<div class="well well-lg main-section">
								<h1>Mina uppgifter</h1>
								<?php 

								if (Input::exists('get')) {
									$message = '';

									if (Input::get('change') == 'password') {
										$message = 'Ditt lösenord har ändrats!';
									} else if (Input::get('change') == 'settings') {
										$message = 'Dina uppgifter har ändrats!';
									}
								?>
								<div class="row">
									<div class="col-md-12 alert alert-success">
										<span class="glyphicon glyphicon-ok-sign"></span> <?php echo $message ?>
									</div>
								</div>
								<?php
								}
								?>
								<div class="row">
									<div class="col-md-12">
										<form action="" method="post" class="form-horizontal">
											<fieldset>
												<div class="form-group">
													<label for="fullname" class="col-md-2 control-label">Namn:</label>
													<div class="col-md-10">
														<input type="text" name="fullname" id="fullname" value="<?php echo $user->data()->fullname; ?>" class="form-control" disabled="">
													</div>
												</div>
												<div class="form-group">
													<label for="email" class="col-md-2 control-label">E-post:</label>
													<div class="col-md-10">
														<input type="email" name="email" id="email" value="<?php echo $user->data()->email; ?>" class="form-control" disabled="">
													</div>
												</div>
												<div class="center">
													<div class="checkbox disabled">
														<input type="checkbox" name="newsletter" id="newsletter" disabled="" checked>
														<label for="newsletter" class="control-label">Ta emot nyhetsbrev från Vad ska jag laga?</label>
													</div>
												</div>
												<br><br><br>
												<div class="col-sm-6 center">
													<a href="andra-uppgifter.php" class="btn btn-success mob-space"><span class="fa fa-pencil"></span> Ändra uppgifter</a>
												</div>
												<div class="col-sm-6 center">
													<a href="byt-losenord.php" class="btn btn-danger"><span class="fa fa-lock"></span> Byt lösenord</a>
												</div>
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