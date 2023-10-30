<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php 

$t=strlen($_GET['page']);

for($i=0;$i<$t;$i++){
$_GET['page']=str_replace("//","/",$_GET['page']);
}
if(isset($_GET['page']) && !empty($_GET['page'])){

if(strpos($_GET['page'],"../..")!==false){
echo "HACKING ATTEMPT DETECTED";

}else{
	$page=$_REQUEST['page'];
	include $page;

}
}
?>
<!-- ../.. is blocked and '//' is replaced with '/' -->
<?php include 'includes/footer.php';?>
