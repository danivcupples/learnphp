<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>


		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<?php


//  Step1: Use a pre-built math function here and echo it

echo pow(4,4);

//	Step 2:  Use a pre-built string function here and echo it

echo strtolower("<br>THISISMYSECRETPASSWORD<br>");

//	Step 3:  Use a pre-built Array function here and echo it

$array = [30, 31, 33, 20, 16, 4, 82, 59, 76, 2];

sort($array);

print_r ($array);


?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>
