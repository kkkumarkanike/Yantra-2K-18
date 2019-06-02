<?php 
session_start();
if(isset($_SESSION['signed_in'])){

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="preloader.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<title>Yantra 2k18 Admin Page</title>
	<style type="text/css">
		@media only screen and (max-width: 786px) {
	
	.over{
		overflow: scroll;
	}
 }

</style>
</head>

<body>  


<br>


<div class="container">
<?php 


require_once('db_config.php');

$q="SELECT * FROM paper_presentation";
$re=mysqli_query($conn,$q);
$count=mysqli_num_rows($re);

?>
<div class="container" class="" style="padding: 20px;">

<a href="logout.php" style="float: right;"><button class="btn btn-success">Logout <i class="fa fa-lock"></i></button></a>
<br><br><br>


<center><h3>Paper Presentation</h3></center>

<div class="row over">
<div class="col-sm-12">
<table class="table table-striped" style="border:1px solid blue;">
    <thead style="">
      <tr>
        <th>ID</th>
        <th>Gender</th>
        <th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>phone</th>
		<th>altphone</th>
		<th>topic</th>
		<th>file</th>
		<th>time</th>
	</tr>
    </thead>
    <tbody style="">
	<?php

while($row=mysqli_fetch_array($re)){
$id=$row['id'];
$gender=$row['gender'];
$name=$row['name'];
$email=$row['email'];
$address=$row['address'];
$phone=$row['phone'];
$altphone=$row['altphone'];
$topic=$row['topic'];
$file=$row['file'];

$of="../".$file;

$t=$row['t'];

echo "
<tr>
<td>$id</td>
<td>$gender</td>
<td>$name</td>
<td>$email</td>
<td>$address</td>
<td>$phone</td>
<td>$altphone</td>
<td>$topic</td>";

if($file=="--"){
	echo "<td>N/A</td>";
}
else{
?>



<td><a href="<?php echo $of; ?>">file</a></td>
<?php 
}
?>


<td>
<?php echo $t; ?>
</td>

		
</tr>


<?php
}
?>


</tbody>
</table>
</div>
</div>




<center><h3>Poster Presentation</h3></center>

<div class="row over">
<div class="col-sm-12">
<table class="table table-striped" style="border:1px solid blue;">
    <thead style="">
      <tr>
        <th>ID</th>
        <th>Gender</th>
        <th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>phone</th>
		<th>altphone</th>
		<th>topic</th>
		<th>file</th>
		<th>time</th>
	</tr>
    </thead>
    <tbody style="">
	<?php
$q="SELECT * FROM poster_presentation";
$re=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($re)){
$id=$row['id'];
$gender=$row['gender'];
$name=$row['name'];
$email=$row['email'];
$address=$row['address'];
$phone=$row['phone'];
$altphone=$row['altphone'];
$topic=$row['topic'];
$file=$row['file'];

$of="../".$file;

$t=$row['t'];

echo "
<tr>
<td>$id</td>
<td>$gender</td>
<td>$name</td>
<td>$email</td>
<td>$address</td>
<td>$phone</td>
<td>$altphone</td>
<td>$topic</td>";

if($file=="--"){
	echo "<td>N/A</td>";
}
else{
?>



<td><a href="<?php echo $of; ?>">file</a></td>
<?php 
}
?>


<td>
<?php echo $t; ?>
</td>

		
</tr>


<?php
}
?>


</tbody>
</table>
</div>
</div>


<center><h3>Project Exhibition</h3></center>

<div class="row over">
<div class="col-sm-12">
<table class="table table-striped" style="border:1px solid blue;">
    <thead style="">
      <tr>
        <th>ID</th>
        <th>Gender</th>
        <th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>phone</th>
		<th>altphone</th>
		<th>topic</th>
		<th>file</th>
		<th>time</th>
	</tr>
    </thead>
    <tbody style="">
	<?php
$q="SELECT * FROM project_exihibition";
$re=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($re)){
$id=$row['id'];
$gender=$row['gender'];
$name=$row['name'];
$email=$row['email'];
$address=$row['address'];
$phone=$row['phone'];
$altphone=$row['altphone'];
$topic=$row['topic'];
$file=$row['file'];

$of="../".$file;

$t=$row['t'];

echo "
<tr>
<td>$id</td>
<td>$gender</td>
<td>$name</td>
<td>$email</td>
<td>$address</td>
<td>$phone</td>
<td>$altphone</td>
<td>$topic</td>";

if($file=="--"){
	echo "<td>N/A</td>";
}
else{
?>



<td><a href="<?php echo $of; ?>">file</a></td>
<?php 
}
?>


<td>
<?php echo $t; ?>
</td>

		
</tr>


<?php
}
?>


</tbody>
</table>
</div>
</div>


<center><h3>Short Film Contest</h3></center>

<div class="row over">
<div class="col-sm-12">
<table class="table table-striped" style="border:1px solid blue;">
    <thead style="">
      <tr>
        <th>ID</th>
        <th>Gender</th>
        <th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>phone</th>
		<th>altphone</th>
		<th>topic</th>
		<th>file</th>
		<th>time</th>
	</tr>
    </thead>
    <tbody style="">
	<?php
$q="SELECT * FROM shortfilm_contest";
$re=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($re)){
$id=$row['id'];
$gender=$row['gender'];
$name=$row['name'];
$email=$row['email'];
$address=$row['address'];
$phone=$row['phone'];
$altphone=$row['altphone'];
$topic=$row['topic'];
$file=$row['file'];

$of="../".$file;

$t=$row['t'];

echo "
<tr>
<td>$id</td>
<td>$gender</td>
<td>$name</td>
<td>$email</td>
<td>$address</td>
<td>$phone</td>
<td>$altphone</td>
<td>$topic</td>";

if($file=="--"){
	echo "<td>N/A</td>";
}
else{
?>



<td><a href="<?php echo $of; ?>">file</a></td>
<?php 
}
?>


<td>
<?php echo $t; ?>
</td>

		
</tr>


<?php
}
?>


</tbody>
</table>
</div>
</div>


<center><h3>Spot Events</h3></center>

<div class="row over">
<div class="col-sm-12">
<table class="table table-striped" style="border:1px solid blue;">
    <thead style="">
      <tr>
        <th>ID</th>
        <th>Gender</th>
        <th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>phone</th>
		<th>altphone</th>
		<th>topic</th>
		<th>file</th>
		<th>time</th>
	</tr>
    </thead>
    <tbody style="">
	<?php
$q="SELECT * FROM spot_events";
$re=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($re)){
$id=$row['id'];
$gender=$row['gender'];
$name=$row['name'];
$email=$row['email'];
$address=$row['address'];
$phone=$row['phone'];
$altphone=$row['altphone'];
$topic=$row['topic'];
$file=$row['file'];

$of="../".$file;

$t=$row['t'];

echo "
<tr>
<td>$id</td>
<td>$gender</td>
<td>$name</td>
<td>$email</td>
<td>$address</td>
<td>$phone</td>
<td>$altphone</td>
<td>$topic</td>";

if($file=="--"){
	echo "<td>N/A</td>";
}
else{
?>



<td><a href="<?php echo $of; ?>">file</a></td>
<?php 
}
?>


<td>
<?php echo $t; ?>
</td>

		
</tr>


<?php
}
?>


</tbody>
</table>
</div>
</div>




<center><h3>Vehicle Diagnosis</h3></center>

<div class="row over">
<div class="col-sm-12">
<table class="table table-striped" style="border:1px solid blue;">
    <thead style="">
      <tr>
        <th>ID</th>
        <th>Gender</th>
        <th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>phone</th>
		<th>altphone</th>
		<th>topic</th>
		<th>file</th>
		<th>time</th>
	</tr>
    </thead>
    <tbody style="">
	<?php
$q="SELECT * FROM vehicle_diagnosis";
$re=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($re)){
$id=$row['id'];
$gender=$row['gender'];
$name=$row['name'];
$email=$row['email'];
$address=$row['address'];
$phone=$row['phone'];
$altphone=$row['altphone'];
$topic=$row['topic'];
$file=$row['file'];

$of="../".$file;

$t=$row['t'];

echo "
<tr>
<td>$id</td>
<td>$gender</td>
<td>$name</td>
<td>$email</td>
<td>$address</td>
<td>$phone</td>
<td>$altphone</td>
<td>$topic</td>";

if($file=="--"){
	echo "<td>N/A</td>";
}
else{
?>



<td><a href="<?php echo $of; ?>">file</a></td>
<?php 
}
?>


<td>
<?php echo $t; ?>
</td>

		
</tr>


<?php
}
?>


</tbody>
</table>
</div>
</div>



<center><h3>Engine Assembly & Dismantling</h3></center>

<div class="row over">
<div class="col-sm-12">
<table class="table table-striped" style="border:1px solid blue;">
    <thead style="">
      <tr>
        <th>ID</th>
        <th>Gender</th>
        <th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>phone</th>
		<th>altphone</th>
		<th>topic</th>
		<th>file</th>
		<th>time</th>
	</tr>
    </thead>
    <tbody style="">
	<?php
$q="SELECT * FROM engine_assembly_and_dismantling";
$re=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($re)){
$id=$row['id'];
$gender=$row['gender'];
$name=$row['name'];
$email=$row['email'];
$address=$row['address'];
$phone=$row['phone'];
$altphone=$row['altphone'];
$topic=$row['topic'];
$file=$row['file'];

$of="../".$file;

$t=$row['t'];

echo "
<tr>
<td>$id</td>
<td>$gender</td>
<td>$name</td>
<td>$email</td>
<td>$address</td>
<td>$phone</td>
<td>$altphone</td>
<td>$topic</td>";

if($file=="--"){
	echo "<td>N/A</td>";
}
else{
?>



<td><a href="<?php echo $of; ?>">file</a></td>
<?php 
}
?>


<td>
<?php echo $t; ?>
</td>

		
</tr>


<?php
}
?>


</tbody>
</table>
</div>
</div>



<center><h3>Automation Studio</h3></center>

<div class="row over">
<div class="col-sm-12">
<table class="table table-striped" style="border:1px solid blue;">
    <thead style="">
      <tr>
        <th>ID</th>
        <th>Gender</th>
        <th>Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>phone</th>
		<th>altphone</th>
		<th>topic</th>
		<th>file</th>
		<th>time</th>
	</tr>
    </thead>
    <tbody style="">
	<?php
$q="SELECT * FROM automation_studio";
$re=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($re)){
$id=$row['id'];
$gender=$row['gender'];
$name=$row['name'];
$email=$row['email'];
$address=$row['address'];
$phone=$row['phone'];
$altphone=$row['altphone'];
$topic=$row['topic'];
$file=$row['file'];

$of="../".$file;

$t=$row['t'];

echo "
<tr>
<td>$id</td>
<td>$gender</td>
<td>$name</td>
<td>$email</td>
<td>$address</td>
<td>$phone</td>
<td>$altphone</td>
<td>$topic</td>";

if($file=="--"){
	echo "<td>N/A</td>";
}
else{
?>



<td><a href="<?php echo $of; ?>">file</a></td>
<?php 
}
?>


<td>
<?php echo $t; ?>
</td>

		
</tr>


<?php
}
?>


</tbody>
</table>
</div>
</div>







</div>
</div>





</body>
</html>
<?php 
}
else{
	echo "You don't have access to this page. Please login as admin";
}
?>