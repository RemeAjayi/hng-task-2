<!DOCTYPE html>
<html>
<head>
<title>HNG Stage One</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa|Oxygen|Poor+Story" rel="stylesheet">
</head>
<body>
<div class="wrapper">
<nav class="float-right">
<i class="fa fa-bars"></i>
</nav>
<div class="form-div float-left padding-small">
<!--house the form-->
</div>
<div class="info-div float-left padding-small">
<!--house the info and time-->
<div class="slack-clone">
<img class="top" src="img/slack-clone.png" width="100px">
<img class="bottom" src="img/slack-clone-dots.png" width="100px">
</div>
<br>
<h1> Hi, </h1>
<h1> I'm <span class="text-red">Olohireme.</span></h1>
<h2>It's <span class="text-red"> 
<?php 
    date_default_timezone_set("Africa/Lagos");
    echo date("h:i:sa");
    ?>    
</span> in 
<span class="text-red" >Ota</span></h2>
</div>
<div class="footer fixed-bottom">
<!--footer, credits and other links-->
<p class="footer-text"> Made with <i class="fa fa-heart"> </i> by Olohireme </p>
</div>
</div>
</body>
</html>