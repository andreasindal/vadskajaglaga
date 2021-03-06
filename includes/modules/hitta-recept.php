		<header>
			<section class="header">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<div class="well well-lg main-section">
								<fieldset>
									<h1>Hitta recept</h1>
									<div class="col-md-12">
										<label for="ingredients">Ange dina ingredienser</label>
										<input type="text" class="form-control" id="ingredients" autocomplete="off">
									</div>
									<div class="col-md-12 choices">
										<div class="ing">
											<label>Valda ingredienser</label>
											<div id="chosen-ingredients"></div>
											<br>
											<p class="note">Tips! För att ta bort en ingrediens är det bara att klicka på den!</p>
										</div>
										<div class="btn-search">
											<form action="sokresultat.php" method="post">
												<input type="hidden" name="ingr_ids" id="ingr_ids">
												<button class="btn btn-success btn-search-btn">Sök recept <span class="fa fa-search btn-search-icon"></span></button>
											</form>
										</div>
									</div>
								</fieldset>
							</div>
						</div>
						<div class="col-md-4">
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

		<script>
			var ingredients = [
				<?php
					foreach(Ingredient::all() as $ingredient) {
						echo '{ id: "' . $ingredient->id . '", value: "' . $ingredient->name . '", bgcolor: "' . $ingredient->bgcolor . '", fgcolor: "' . $ingredient->fgcolor . '" },';
					}
				?>
			]
		</script>