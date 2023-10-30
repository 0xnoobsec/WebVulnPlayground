<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php
if(!isset($_GET['welcome'])) {
header('Location: 6.php?welcome=Welcome');
}
?>

  
 <?php
          if(isset($_GET['welcome'])) {
            $welcome =  $_GET['welcome'];

            $welcome = preg_replace('/script/', '', $welcome);

            echo $welcome;
          }
?>  
<!-- common bypass -->
<?php include 'includes/footer.php';?>