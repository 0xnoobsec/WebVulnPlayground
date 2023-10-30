<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php

$page = $_REQUEST['page'];
    
if((strpos($_GET['page'],'etc/passwd')!==false) || (strpos($_GET['page'],'/.')!==false)){
$_REQUEST['page']="39d4a510cb4c28adf5feecabdb1b9d2b.txt";
$local_file = $_REQUEST['page'];
include $local_file;
}

?>
<!--This one is simple. Please don't ask for hints -->
<?php include 'includes/footer.php';?>