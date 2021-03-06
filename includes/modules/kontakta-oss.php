		<header>
			<section class="header">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<div class="well well-lg main-section">
								<fieldset>
									<h1>Kontakta oss</h1>
							<?php

								if ($user->isLoggedIn()) {
									$fullname = $user->data()->fullname;
									$email = $user->data()->email;
								} else {
									$fullname = '';
									$email = '';
								}

								if (Input::exists('get')) {
									if (Input::get('go') == 'success') {
										echo '
										<p class="center">
											Tack för ditt meddelande! Så fort vi läst igenom det så återkommer vi med ett svar till din e-post!
										<br><br>
											<a href="index.php" class="btn btn-success center">Tillbaka till startsidan</a>.
										</p>
										';
									} else if (Input::get('go') == 'send') {
										if (Input::exists()) {
											if (Token::check(Input::get('token'))) {

												$validate = new Validate();
												$validation = $validate->check($_POST, array(
													'email' => array(
														'required' => true,
														'email' => true
													),
													'fullname' => array(
														'required' => true,
														'min' => 2,
														'max' => 50,
														'alphabetical' => true
													),
													'message' => array(
														'required' => true
													)
												));

												if ($validation->passed()) {
													$message = new Message();

													try {
														$message->create(array(

															'email' => Input::get('email'),
															'fullname' => Input::get('fullname'),
															'message' => Input::get('message')

														));
														
														Redirect::to('kontakta-oss.php?go=success');

													} catch (Exception $e) {
														Redirect::to(500);
													}
												} else {
													echo '<script>alert("Det gick inte att skicka ditt meddelande");</script>';
												}
											} else {
												Redirect::to(404);
											}
										} 
									}
								} else {
							?>
									<p>
										Är det något du undrar över, eller har du märkt att det finns ett recept som på något sätt bryter mot <a href="regler-och-villkor.php" title="Regler &amp; villkor">reglerna</a>?
										Kanske vill du rent av bara tipsa oss om något? Då får du mer än gärna skriva till oss och berätta!
									</p>
									<br>
									<form action="kontakta-oss.php?go=send" method="post" class="form-horizontal">
										<fieldset>
											<div class="row">
												<div class="col-md-12">
													<legend>Kontaktformulär</legend>
													<label for="fullname" class="col-md-2 control-label">Namn:</label>
													<div class="col-md-10">
														<input type="text" name="fullname" id="fullname" value="<?php echo $fullname; ?>" <?php if ($user->isLoggedIn()) { echo 'readonly'; } ?> class="form-control" required>
													</div>
													<br><br>
													<label for="email" class="col-md-2 control-label">E-post:</label>
													<div class="col-md-10">
														<input type="email" name="email" id="email" value="<?php echo $email; ?>" <?php if ($user->isLoggedIn()) { echo 'readonly'; } ?> class="form-control" required>
													</div>
													<br><br>
													<label for="message" class="col-md-2 control-label">Meddelande:</label>
													<div class="col-md-10">
														<textarea class="form-control" name="message" id="message" rows="6" required></textarea>
													</div>
													<div class="col-md-2"></div>
													<div class="col-md-10">
														<br>
														<input type="hidden" name="token" value="<?php echo $token; ?>">
														<button type="submit" class="btn btn-success"><span class="fa fa-paper-plane"></span> Skicka</button>
													</div>
												</div>
											</div>
										</fieldset>
									</form>
<?php
								}
?>								</fieldset>
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