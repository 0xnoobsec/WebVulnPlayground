<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>


<?php 
if (!isset($_GET["page"])){

	header("Location: 20.php?page=attacker");

	die();

}


?>

	<h1>

		<?php 

			$str="echo \"Hello ".$_GET['page']. "!!!\";";
            if(strpos($_GET['page'], 'rm') !== false){
            echo "Hacking Attempt Detected";
            }
            else
            {

			eval($str);
            }

		?>	

	</h1>
<!-- getting error is a cool thing during pentest -->
<!-- Javascript is injectable. But the lab purpose is different for this lab :) -->
<?php include 'includes/footer.php';?>
