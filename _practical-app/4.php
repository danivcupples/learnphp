<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>


	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<?php

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

 function calc($x, $y){
	 $product = $x * $y;
	 return $product;
 }

 $result = calc(12, 17);

 echo $result;

?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>
