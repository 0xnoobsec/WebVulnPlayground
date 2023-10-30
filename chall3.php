<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php
		if (isset($_SERVER['HTTP_REFERER'])){
            echo "<br>";
			echo utf8_decode(urldecode($_SERVER['HTTP_REFERER']));
		}

?>
<!-- something is reflecting -->
<?php include 'includes/footer.php';?>