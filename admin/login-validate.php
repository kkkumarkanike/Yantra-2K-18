<?php
 // clear out any existing session that may exist
  session_start();
  session_destroy();
  session_start();
?>


<?php
$email = $_POST['username'];
$pass = $_POST['pwd'];


require_once('db_config.php');


$query = "SELECT * FROM admin_users WHERE (username='$email') AND password='$pass'";

$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);




if ($count == 1){
	$row = mysqli_fetch_array($result);
	
	
$_SESSION['signed_in'] = true;



//redirect when signin successfull

echo '
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
<link rel="stylesheet" href="css/loading.css">  
<script>setTimeout(`location="admin-page.php";`,2500);</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="wrapper">
<div class="circle circle-1"></div>
<div class="circle circle-1a"></div>
<div class="circle circle-2"></div>
<div class="circle circle-3"></div>
</div>
<h1>Signing in... Please wait&hellip;</h1>  
</body>
</html>
';
}

else
{
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
<h1>Login Failed Please try again&hellip;</h1>  
</body>
</html>
';
	
}








?>
