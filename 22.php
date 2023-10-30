<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>


<?php 

if (!isset($_GET["page"])){

	header("Location:22.php?page=attacker");

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
			assert("'".$str."'");
            }

		?>	

	</h1>
    
<!-- getting error is cool during pentest -->

<?php include 'includes/footer.php';?>