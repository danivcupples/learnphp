<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>

	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
if (3 > 5){
	echo "php sucks";
} elseif (5 > 10){
	echo "php still sucks";
} else {
	echo "nm, i love php! <br>";
}

for ($a = 24; $a <= 33; $a++){
	echo $a . "<br>";
}

switch (33) {
	case 32:
		echo "meh";
		break;
	case 33:
		echo "it was a good year";
		break;
	default:
		echo "just keep swimming";
		break;
}

?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
