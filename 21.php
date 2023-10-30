<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php 

if (!isset($_GET["page"])){

	header("Location: 21.php?page=attacker&pattern=/leet/&base=Hello%20leet");

	die();

}

?>

	<h1>

		<?php 
        if(strpos($_GET['page'], 'rm') !== false){
            echo "Hacking Attempt Detected";
            }
         else {

			echo preg_replace($_GET["pattern"], $_GET["page"], $_GET["base"]);
            }

		?>	

	</h1>
<!-- regular expression or preg replace? -->
<?php include 'includes/footer.php';?>
