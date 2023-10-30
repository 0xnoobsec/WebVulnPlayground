<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Welcome to our site.</h1>
    <?php 
    if (isset($_COOKIE["username"])){
    if ($_COOKIE["username"]==base64_encode("admin")){
    echo '<h1>flag{C00K13_5H0ULD_B3_5TR0N6LY_3NC0D3D}</h1>';
    }
    else{
    echo '<h1>flag{no_flag_for_you}</h1>';
    }
    }
    ?>
    <p>
        <a href="logout2.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>
</html>