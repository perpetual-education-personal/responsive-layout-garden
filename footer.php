
			<!-- STUFF -->
		</main>


		<footer class='site-footer'>
		<inner-column>

			<!-- no headers in footers allowed? -->
			<div class='what-to-call-it-then'>
				<h2 class='attention-voice'>This is the site footer and it has a "site-map" module in it.</h2>

				<p>Pretty standard type of thing, right?</p>
			</div>

			<?php include('modules/site-map/template.php'); ?>

		</inner-column>
		</footer>


		<script>
			var html = document.documentElement;
			var paper = document.getElementById('paper');
			function setPaper(/* event == this */) {
				html.style.backgroundColor = this.value;
				html.style.setProperty('--paper', this.value);
			}
			paper.addEventListener('input', setPaper);

			var ink = document.getElementById('ink');
			function setInk(/* event == this */) {
				html.style.setProperty('--ink', this.value);
			}
			ink.addEventListener('input', setInk);

			var corners = document.getElementById('corners');
			function setCorners(/* event == this */) {
				html.style.setProperty('--corners', this.value + 'px');
			}
			corners.addEventListener('input', setCorners); setCorners(0);

			window.addEventListener('click', function(event) {
				if ( event.target.matches('.toggle') ) {
					html.classList.toggle('controls-open');
				}
			});


		</script>

	</body>
</html>