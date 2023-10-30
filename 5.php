<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php
if(!isset($_GET['lab'])) {
header('Location: 5.php?lab=welcome');
}
?>
 <?php
          if(isset($_GET['lab'])) {
            $status =  $_GET['lab'];

          $status = preg_replace('/alert/', '', $status);

          echo $status;
          }
 ?>
 <!-- replaced! very easy bypass -->
 <?php include 'includes/footer.php';?>
