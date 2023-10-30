<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>


<?php 

if (isset($_GET["page"])) {

$input = $_GET["page"];

echo "<hr /><br ?>";



#Remove most of the special characters



$blacklist = array(" ","&", "|", "@", "%", "^", "~", "`", "<", ">", "\\", ",", "/");

$input = str_replace($blacklist, " ", $input);



#Remove some of the common commands that are used



$blacklist = array("ls", "cat", "less", "tail", "more", "whoami", "pwd", "echo", "rm");



$input = str_replace($blacklist, " ", $input);



$output = shell_exec("ping -c l ".$input);



if(isset($_GET["debug"]) == true){

	echo "<div>ping -c l ".$input."</div>";

}



echo "<pre>".$output."</pre>";



}

 ?>
<!-- black list or white list? -->
 
<?php include 'includes/footer.php';?>
