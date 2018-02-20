
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>

		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<?php

/*  Step1: Make a form that submits one value to POST super global


 */
 if (isset($_POST['submit'])){
	 $flower = $_POST['flower'];

	 if(substr($flower, -1) === 'y'){
		 $flower = substr($flower, 0, (strlen($flower)-1)) . "ie";
	 }

	 echo "Cool! I love " . $flower . "s too!";
 }


?>

<form action="6.php" method="post">
	<input type="text" name="flower" placeholder="Your Favorite Flower"><br>
	<input type="submit" name="submit">
</form>
</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>
