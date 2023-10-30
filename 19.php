<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php
$page = str_replace('../', '', $_GET['page']);
if((strpos($_GET['page'],'%2fetc%2fpasswd')!==false) && (strpos($_GET['page'],'%2f.')!==false)){
$_REQUEST['page']="7abeb4a5bf98a534fb2844954d84eef1.txt";
$local_file = $_REQUEST['page'];
include $local_file;
}
?>
<!-- Url encode or Double Url encode? -->
<?php include 'includes/footer.php';?>