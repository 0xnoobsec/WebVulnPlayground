<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>


<?php
header('X-XSS-Protection: 0');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["myfile"]["name"]);
$FileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
?>

<form action="12.php" method="POST" enctype="multipart/form-data">
            <center><input type="file" name="myfile" id="myfile"></center>
            <center><input class="btn btn-primary my-2 my-sm-0" type="submit" value="Upload Image" name="submit"></center>
</form>

<?php
if(isset($_POST['submit']))
{ 
$filepath = "uploads/" . $_FILES["myfile"]["name"];

if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $filepath)) 
{
echo "<img src=".$filepath."/>";
} 
} 
?>
<?php
if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file) && $FileType === "jpg" || $FileType === "png" || $FileType == "jpeg" || $FileType == "svg") {
echo "The file " . htmlspecialchars(basename($_FILES["myfile"]["name"])) . " has been uploaded.";
}
?>

<?php
$exif = exif_read_data($target_file, 0, true);
foreach ($exif as $key => $section) {
foreach ($section as $name => $val) {
echo "<tbody>";
echo "<tr>";
echo "<td>$name</td>";
echo "<td>$val</td>";
echo "</tr>";
echo "</tbody>";
}
}
?>

<!--Uploaded Images are not visible. But there's a broken image after uploading. Click on that and open in new tab. Remove "/" after your image name. If you get something then congratulations. If not(not found) then try again -->
    
<?php include 'includes/footer.php';?>
