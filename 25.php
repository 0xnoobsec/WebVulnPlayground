<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

     
     
     <center><form action="xyz/unsaferesponse.php" method="post">

            <label for="fileName">Enter Your Name</label>

            <input type="text" name="fileName" id="fileName">

            <input type="submit" name="submit" value="submit">

            

        </form></center>
        
 <!-- Your task is to see the flag. Not XSS -->
<?php include 'includes/footer.php';?>
