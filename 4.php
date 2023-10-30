<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php
if(!isset($_GET['welcome'])) {
header('Location: 4.php?welcome=Welcome');
}
?>

 <?php
    if(isset($_GET['welcome'])) {
    $welcome =  $_GET['welcome'];

    $welcome = preg_replace('/script/', '', $welcome);
    $welcome = preg_replace('/img/', '', $welcome);
    $welcome = preg_replace('/alert/', '', $welcome);
    $welcome = preg_replace('/prompt/', '', $welcome);

    echo $welcome;
    }
?>
<!-- replaced. easy bypass -->
<?php include 'includes/footer.php';?>