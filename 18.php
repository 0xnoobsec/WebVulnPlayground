<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<form action="18.php" method="POST">
    <center><input type="text" name="name"></center>
    <input type="hidden" name="id">
</form>


<?php 

if((strpos($_POST['id'],"/etc/passwd")!==false) && (strpos($_POST['id'],'./.')!==false)){
$_REQUEST['id'] ="3cfb17b33e0a67c448a88ee0a2d63067.txt";
	$id=$_REQUEST['id'];
	include $id;
}

?>


<!-- Easiest one -->

<?php include 'includes/footer.php';?>
