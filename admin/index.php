<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <title>Admin Login</title>
<style>
body{
	font-family:verdana;
}
</style>
<body>
<br><br>

<div class="container">
<h2 class="text-center" >Admin Login</h2>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">

<form action="login-validate.php" method="post">
  <div class="form-group">
    <label for="username">User Name:</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="User Name">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Login</button>
</form>



</div>
<div class="col-sm-4"></div>

</div>


</div>



</body>
</html>



















