<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php

   $page = str_replace('../', '', $_GET['page']);
   if(isset($page))
   {
       include("$page");
   }
?>

<!-- No Hints. Easy one -->

<?php include 'includes/footer.php';?>