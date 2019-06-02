<?php
session_start();
// Starting session

 
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

echo '
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
<script>setTimeout(`location="index.php";`,2500);</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/loading.css">  
</head>
<body>
<div class="wrapper">
<div class="circle circle-1"></div>
<div class="circle circle-1a"></div>
<div class="circle circle-2"></div>
<div class="circle circle-3"></div>
</div>
<h1>Signing out... Please wait&hellip;</h1>  
</body>
</html>
';

?>
