<!doctype html>

<html lang='en'>
	<?php include('head.php'); ?>

	<body>
		<header class='site-header'>
		<inner-column>

			<?php include('modules/masthead/template.php'); ?>

			<control-center>
				<field>
					<label for='paper' class='calm-voice'>Paper</label>
					<input id='paper' type='color'> 
				</field>

				<field>
					<label for='ink' class='calm-voice'>Ink</label>
					<input id='ink' type='color'> 
				</field>

				<field>
					<label for='corners' class='calm-voice'>Corners</label>
					<input id='corners' type='range' min='0' max='20'> 
				</field>
			</control-center>

		</inner-column>
		</header>


		<main class='page-content'>
			<!-- STUFF -->
