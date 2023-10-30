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
      <a class="navbar-brand" href="<?php echo $x; ?>" >SECURITY VAULT</a>
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
    <p>SECURITY VAULT BY NOOBSEC - SSH.CONNECT</p>
  </div>
</div>
  



<nav>
<?php
$y=basename($_SERVER['REQUEST_URI']);
?>
<div class="container-fluid bg-3 text-center">    
  <div class="row">
<ul><li><a href="<?php  unset($y); echo $y; unset($y);?>?page=home.php">Home</a></li></ul>
<ul><li><a href="<?php echo $y;?>?page=blog.php">Blog</a></li></ul>
<ul><li><a href="<?php echo $y;?>?page=contact.php">Contact</a></li></ul>

</div>
</div>

</nav>

