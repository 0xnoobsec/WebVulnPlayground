<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php

if (isset($_POST['fname'])) {
echo "<div style=\"text-align:center;font-size:3em;\">Hello, " . htmlspecialchars($_POST['fname']) . "</div>";
}

else{

    echo '<form name="myForm" action="9.php" onsubmit="return validateForm()" method="post">
    <div class="siimple-form">
    <div class="siimple-form-detail">Fill the form to contact us.</div>
    <div class="siimple-form-field">
        <div class="siimple-form-field-label">Your Name</div>
        <input type="text" class="siimple-input siimple-input--fluid" placeholder="NoobSec" name="fname" >
        <input class="siimple-btn siimple-btn--blue" type="submit"  value="Submit">
    </div>
    </div>
    </form>';

}

?>
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'alert')!==false or strpos($_SERVER['HTTP_USER_AGENT'], 'prompt')!== false or strpos($_SERVER['HTTP_USER_AGENT'], 'confirm')!== false or strpos($_SERVER['HTTP_USER_AGENT'], 'confirm')!== false) {
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

<!-- Most of the bug exists in input field, parameter and in header* -->
<?php include 'includes/footer.php';?>
