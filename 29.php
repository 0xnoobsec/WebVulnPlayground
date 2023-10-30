<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>



<?php
$url = $_GET['url'];
echo base64_encode(file_get_contents($url,false, stream_context_create(array('http' =>array('method'=>'GET'),"ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
)))));
?>
<center><div class="text-input">
    <input type="text" id="input1">
    <input id=button style="border-radius: 3px;
    background: green;color:white;padding:5px;font-family: Montserrat;font-size:14px;position: absolute;height: 40px;"type="submit" value="GO>!">
  </div>
  </center>
  
  <br>
  <br>
<script>
    var btn=document.getElementById("button");
    var imgload=document.getElementById("loaded-image");
    btn.addEventListener("click",function(){
    var x=new XMLHttpRequest();
    x.onload=function(){
        var img=x.responseText;
        imgload.innerHTML="<img src='data:image/png;base64," + img + "'  style='max-height: 250px;max-width: 400px%;' />";
        imgload.style.display="block";
    }
    x.open("GET","29.php?url="+document.getElementById('input1').value);
    x.send();
    });
</script>
<!-- server side or client side? -->
<?php include 'includes/footer.php';?>