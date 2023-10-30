<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php

if (isset($_POST['fname'])) {

   echo "<div style=\"text-align:center;font-size:3em;\">Hello, " . $_POST['fname'] . "</div>";

}
else{

    echo '<form name="myForm" action="7.php" onsubmit="return validateForm()" method="post">
    <div class="siimple-form">
    <center><div class="siimple-form-detail">Fill the form to contact us.</div></center>
   <center> <div class="siimple-form-field">
        <div class="siimple-form-field-label">Your Name</div>
        <input type="text" class="siimple-input siimple-input--fluid" placeholder="NoobSec" name="fname" >
        <input class="siimple-btn siimple-btn--blue" type="submit"  value="Submit">
    </div>
    </center>
    </div>
    </form>';

}

?>

<br>
<br>
<br>


<?php 
$a = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('(alert|prompt|confirm|eval)', $a) === 1) {
	echo $_SERVER['HTTP_USER_AGENT'];
} 

?>



<script>
	function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>
<!-- No Hints. Very Easy -->
<?php include 'includes/footer.php';?>
