<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
	if((strpos($_GET['page'],'etc/passwd')!==false) || (strpos($_GET['page'],'/.')!==false)){
	$_REQUEST['page'] ="3cfb17b33e0a67c448a88ee0a2d63067.txt";
	$page=$_REQUEST['page'];
	include $page;
}
}
?>

<!-- GET OR POST? -->
<?php include 'includes/footer.php';?>
