
<?php include('header.php'); ?>

<?php
	$flipped = false; // you may need to setup some defaults or something...
?>


<section>
<inner-column>

	<?php include('modules/media-overview/template.php'); ?>

</inner-column>
</section>


<section>
<inner-column>

	<?php include('modules/big-heading/template.php'); ?>

</inner-column>
</section>







<section>
<inner-column>

	<?php include('modules/one-paragraph/template.php'); ?>

</inner-column>
</section>



<section>
<inner-column>

	<?php include('modules/heading-and-paragraph/template.php'); ?>

</inner-column>
</section>



<section class='meet-us'>
<inner-column>

	<?php include('modules/call-to-action/template.php'); ?>

</inner-column>
</section>



<section>
<inner-column>

	<?php include('modules/quote-spotlight/template.php'); ?>

</inner-column>
</section>



<section>
<inner-column>

	<?php include('modules/graphic-diptych/template.php'); ?>

</inner-column>
</section>



<section>
<inner-column>

	<?php 
		$flipped = true;
		//include('modules/graphic-diptych/template.php');
	?>

</inner-column>
</section>



<section class='offset-squares'>
<inner-column>

	<?php 
		$flipped = true;
		include('modules/graphic-diptych/template.php');
	?>

</inner-column>
</section>



<section> <!-- you could imagine these sections being looped through based on data -->
<inner-column>

	<?php include('modules/articles-intro/template.php'); ?>

</inner-column>
</section>



<?php include('footer.php'); ?>
