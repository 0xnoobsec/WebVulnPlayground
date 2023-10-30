</!DOCTYPE html>
<html>
<head>
	<title>NoobSec Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
	nav{

	}

	nav ul{
		list-style: none;
	}

	nav li {
		display: inline-block;
	}
 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>
  
<?php
$x=basename($_SERVER['REQUEST_URI']);
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php" >SECURITY VAULT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo $x; ?>">Home</a></li>
        <li><a href="<?php echo $x; ?>">Hackers List</a></li>
      </ul>
      </ul>
    </div>
  </div>
</nav>
<div class="jumbotron">
  <div class="container text-center">
    <h1>WELCOME</h1>      
    <p>SECURITY VAULT BY <a href="https://linkedin.com/in/mehedi991" style="text-decoration:none">NOOBSEC</a></p>
  </div>
</div>
  



<nav>
<div class="container-fluid bg-3 text-center">    
  <div class="row">
<ul><li><a href="challenges.php"><h3>SHOW CHALLENGES</h3></a></li></ul>

</div>
</div>

</nav>


<div class="row">
  <div class="col-md-4"><center><img src="/images/images.jpg" style="height:300px; width: 300px;"></center></div>
  <div class="col-md-4"><center><img src="/images/doge-vault-hacked-dogecoins-stolen.jpg" style="height:300px"></center></div>
  <div class="col-md-4"><center><img src="/images/images-1.jpg" style="height:300px; width: 300px;"></center></div>
</div>

<center><h3>Lab By NoobSec</h3></center>
</body>
</html>