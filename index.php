<?php $pageName="The Retrodrome"; include("./assets/includes/header.php");?>
				<div id="splash">
					<img class="random-sprite" src="assets/img/game-themes/contra/sprite.gif" alt="sprite description injected here">
					<blockquote class="blurb">
						<p><q>All your base are belong to us.</q></p>
						<cite>—Cats, Zero Wing</cite>
					</blockquote>
					<div id="search-box">
						<input id="search" type="search" placeholder="search..." /> <!-- searchable by title, year, publisher, developer, console, composer, artist, characters, genre, region etc. -->
						<div id="results">
							<ul class="fixed-bg blur-bg">
								<a href="game.php">
									<li>
										<img class="box-thumb" src="assets/img/box-art/thumbs/NES-TY-USA-10-yard-fight-usa-europe-thumb.png" alt="10 Yard Fight Box Art">
										<div class="result-meta">
											<h2 class="result-title">10 Yard Fight</h2>
											<p class="result-yr-dev">1985 | Nintendo</p>
										</div>
									</li>
								</a>
								<li>
									<img class="box-thumb" src="assets/img/box-art/thumbs/NES-NF-USA-1942-japan-usa-thumb.png" alt="1942 Box Art">
									<div class="result-meta">
										<h2 class="result-title">1942</h2>
										<p class="result-yr-dev">1986 | Capcom</p>
									</div>
								</li>
								<li>
									<img class="box-thumb" src="assets/img/box-art/thumbs/NES-43-USA-1943-the-battle-of-midway-usa-thumb.png" alt="1943 Box Art">
									<div class="result-meta">
										<h2 class="result-title">1943</h2>
										<p class="result-yr-dev">1988 | Capcom</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			<?php include("assets/includes/footer.php");?>