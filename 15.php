<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>


<?php
if((strpos($_GET['page'],"../..")!==false) || (strpos($_GET['page'],"/./")!==false ) ){	
echo "HACKING ATTEMPT DETECTED";
}
else{
	
	$page=$_REQUEST['page'];
	include $page;
}
?>

<!-- something is blocked. Try common bypass-->

<?php include 'includes/footer.php';?>


