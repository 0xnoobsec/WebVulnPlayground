<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php
session_start();

$userinfo = array(
                'Noob'=>'noob',
                'Sec'=>'noob'
                );



if(isset($_POST['username'])) {
  if(isset($userinfo[$_POST['username']])){if($userinfo[$_POST['username']] == $_POST['password']) {
      $_SESSION['username'] = $_POST['username'];
  }else {
    header('Location: 8.php?message=wrong user name or password');

  }

}
else {
    header('Location: 8.php?message=wrong user name or password');}
}
?>             
    
<?php
          if(isset($_GET['message'])) {
           $status =  '<div class="siimple-alert siimple-alert--error">' . $_GET['message'] . '</div>';
       	echo $status;
  
       }

?>

<?php


    if(isset($_SESSION['username'])){
      echo '<span style="text-align:center;font-size:2em;;">You are logged in as ' . $_SESSION['username'] . '</span>';
      echo '<br><br><a class="siimple-btn siimple-btn--blue" href="javascript:delete_cookie(\'PHPSESSID\');" >Logout</a>';
    }
		else{

			echo '<form name="myForm" action="8.php"  method="post">
			<center><div class="siimple-form">
			<br><br>
            <div class="siimple-form-field">
            <input type="text" class="siimple-input siimple-input--fluid" placeholder="username" name="username"> Username
			</div>
			<div class="siimple-form-field">
			<input type="password" class="siimple-input siimple-input--fluid" placeholder="password" name="password"> Password
			</div>
			<div class="siimple-form-field"><br>
				<input class="siimple-btn siimple-btn--blue" type="submit"  value="Login">
			</div>
			</div></center>
			</form>';

		}

?>
<!-- no hints -->
<?php include 'includes/footer.php';?>
