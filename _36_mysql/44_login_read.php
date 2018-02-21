<?php include "45_db.php";?>
<?php include "45_46_52_53_functions.php";?>

<?php include "_includes/header.php" ?>

<div class="container">

    <div class="col-sm-6">

    <!-- <pre> -->
      <?php
        while($row = mysqli_fetch_assoc($result)){
      ?>

          <pre>

      <?php
          print_r($row);

          ?>
        </pre>
        <?php
        }
      //readRows();
      ?>
     <!-- </pre> -->
    </div>


<?php include "_includes/footer.php"?>
