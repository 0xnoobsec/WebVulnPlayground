<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php
if(!isset($_GET['status'])) {
  header('Location: 11.php?status=TGFiIGJ5IE5vb2JTZWM=');
}
?>
  
 <?php
	 if(isset($_GET['status'])) {
    $status =  $_GET['status'];

    $status = base64_decode($status);

	echo $status;
}
?>
<!--You need hints for this? This one is simple. Come on dude -->
<?php include 'includes/footer.php';?>