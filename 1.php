<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php
if(isset($_GET['status'])) {
} else {
header('Location:'.$_SERVER['PHP_SELF'].'?'.'status=hello');
die;
}
?> 
<?php
echo "<br>Value : ";
if(isset($_GET['status'])) {
$status =  $_GET['status'];
echo $status;
}
?>
<!-- This is so simple-->
<?php include 'includes/footer.php';?>

