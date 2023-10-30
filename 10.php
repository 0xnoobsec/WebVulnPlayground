<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>


<?php
header('X-XSS-Protection: 0');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["myfile"]["name"]);
$FileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
?>

<center> <form action="10.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="myfile" id="myfile">
            <input class="btn btn-primary my-2 my-sm-0" type="submit" value="Upload Image" name="submit">
        </form></center>
<?php

if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file) && $FileType === "jpg" || $FileType === "png" || $FileType == "jpeg" || $FileType == "svg") {
            echo "The file " . (basename($_FILES["myfile"]["name"])) . " has been uploaded.";
            }
?>
<!-- Don't cross your limit. Don't try to upload harmful file -->
<?php include 'includes/footer.php';?>