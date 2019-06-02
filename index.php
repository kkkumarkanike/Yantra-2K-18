<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/box.css">
  <link rel="icon" type="image/icon" href="favicon.png">

<script src="components/counter.js"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	body{
  		font-family: arial;
  		background-color: #000033;
  	}
  	.design{
  		text-shadow: 4px 4px 10px white;
  	}
  	h1{
  		font-size: 60px;
  	}
  	.date{
  		font-size: 50px;
  	}
 .design1{
 	border-radius: 0 px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 10px 25px 0 black;
  
 }
 .subs{
 	margin-left: 350px;
 }
 .span{
 	font-size: 30px;
 }

 @media only screen and (max-width: 786px) {
 	
 	.subs{
 		margin-left: 10px;
 		font-size: 18px;
 	}
 	h1{
 		font-size: 45px;
 	}
 	.span{
 		font-size: 22px;
 	}
 	.date{
 		font-size: 25px;
 	}
 	h2{
 		font-size: 22px;
 	}
  .text {font-size: 11px}
}
.image{
        width: 200px;
        height: 150px;
      }

  </style>

</head>
<body>
	
	<?php 
	include 'components/navigation.php';
	?>

<!--  main block -->
<div class="container-fluid" style="background-image: url('images/source1.gif');">
	<div class="container">
	<div class="row" >
		<div class="col-sm-2" style="">
			<center><img src=" images/college.png" width="150px" height="150px" style="float:;"></center>
			
		</div>
		<div class="col-sm-8 text-center" >

			<h2 style="color: white; font-family:arial;"><span style="text-shadow: 2px 2px 4px orange;">DEPARTMENT OF MECHANICAL ENGINEERING</span><br> 

<span style="font-size: 22px;">JNTUA COLLEGE OF ENGINEERING (Autonomous)
PULIVENDULA </span><br> <span style="font-size: 22px;">KADAPA (DISTRICT),516390</span></h2>
			
		</div>
		<div class="col-sm-2" style="">
					<center><img src=" images/logo.png" width="150px" height="150px" style="float: ;">	</center>
		</div>
		</div>
	</div>
	<center style="color: #ffcccc; text-shadow: 2px 2px 4px orange; font-family: serif;"><span class="span">A NATIONAL LEVEL STUDENTS TECHNICAL SYMPOSIUM</span></center>
	
   
			
		
			<center><h1 style="color: #ffffff; text-shadow: 2px 2px 4px orange; font-family: BatmanForeverAlternate ; font-size: 100px;">Yantra 2k18</h1>
			<sub class="subs" style="color: #ffffff; text-shadow: 2px 2px 4px orange; font-family: serif;font-size: 22px;">gear up to reign...</sub>
			</center>
		<br>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8"><div>
		<marquee><p style="font-size: 30px; font-family: serif; color: white;text-align: center;">Man Made by Mechanism, World ruled by Mechanicals</p>
		</marquee> 
		</div></div>
			<div class="col-sm-2"></div>
			
		</div>

	<br><br>
	<center style="color: #ffcccc; text-shadow: 2px 2px 4px orange; font-family: Times New Roman;"><span class="date">26-28 SEPTEMBER</span></center>
	<center><a href="registration.php"><button class="btn btn-default">Registration <i class="fa fa-arrow-right"></i></button></a></center><br>
	<br>
</div>


<!-- About us block -->
<div class="container-fluid" style="background: #b22222;">
	<br><br>
<div class="container" style="">
	<div class="row">
		<div class="col-sm-6" style="color: white;">
			<h2 style="text-shadow: 2px 2px 4px red;"><b>About Us</b></h2>
<p style="font-size: 18px;">Department of Mechanical Engineering of JNTUA College of Engineering,
Pulivendula with an intake of 60 students, is started in the year 2006. The building is .....</p>
<a href="about.php"><button class="btn btn-default">Know More <i class="fa fa-arrow-right"></i></button></a><br><br><br>
		</div>
		<div class="col-sm-6 text-center">
			<center><?php include 'components/aboutus-slider.php'; ?></center>
		</div>
	</div>
</div>
<br><br>
</div>

<!-- Events block -->
<div class="container-fluid" style="background: #000080;">
	<br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-6" style="color: white;">
			<h2 style="text-shadow: 2px 2px 4px red;"><b>Events</b></h2>
			<ul>
<li><h4><b>Poster Presentation</b></h4></li>
<li><h4><b>Paper Presentation</b></h4></li>
<li><h4><b>Project Exihibition</b></h4></li>
<li><h4><b>Short Film Contest</b></h4></li>
<li><h4><b>Spot Events</b></h4></li>
</ul>
<a href="events.php"><button class="btn btn-default">Know More <i class="fa fa-arrow-right"></i></button></a><br><br><br>
		</div>
		<div class="col-sm-6 text-center">
			<center><?php include 'components/events-slider.php'; ?></center>
		</div>
	</div>
</div>
<br><br>
</div>

<!-- Workshop block -->
<div class="container-fluid" style="background: #800000;">
<br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-6" style="color: white;">
			<h2 style="text-shadow: 2px 2px 4px red;"><b>Advanced Workshop</b></h2>
			<ul>
<li><h4><b>Vehicle Diagnosis</b></h4></li>
<li><h4><b>Engine Assembly & Dismantling</b></h4></li>
<li><h4><b>Automation Studio</b></h4></li>
<li><h4><b></b></h4></li>
</ul>
<a href="yantra_workshop.php"><button class="btn btn-default">Know More <i class="fa fa-arrow-right"></i></button></a>
<h4><b>NOTE: Free workshop on 3D-Printing for above 3 workshops </b></h4></li>
		</div>
		<div class="col-sm-6 text-center">
			<center><?php include 'components/workshop-slider.php'; ?></center>
		</div>
	</div>
</div>

<br><br>
</div>



<!-- Gallery -->

<div class="container-fluid" style="background-color: #264d73">
	<br><br>
<div class="container">
	<a href="gallery.php">
		<center>	<h2 style="text-shadow: 2px 2px 4px red; color: white;"><b>Gallery</b></h2></center>
		

		<div>
			<center><?php include 'components/gallery-slider.php'; ?></center>
		</div>
	</a>
</div>
<br><br>

<div class="container">
	
		<center>	<h2 style="text-shadow: 2px 2px 4px red; color: white;"><b>Sponsors</b></h2></center>
		

		<div>
			<center><h4 style="color: white;">We will update sponsors soon...</h4></center>
		</div>
	
</div>
<br><br>
</div>

<!---------------------------------------------------- Hospitality ------------------------------------------------------>
<div class="container-fluid" style="background-color: #000080">
<br><br>

<div class="container">
	<div class="row">
		<div class="col-sm-6" style="color: white;">
			<h2 style="text-shadow: 2px 2px 4px red;"><b>Hospitality</b></h2>
			  <p style="color:white;font-size: 18px;"><b>Since the dawn of Yantra in 2008, we have been striving for the gratifications of our delegates by providing .... </b></p>
			
         <a href="hospitality.php"><button class="btn btn-default">Know More <i class="fa fa-arrow-right"></i></button></a>
        
	    </div>
		<div class="col-sm-6" style="color: white;">
			<h2 style="text-shadow: 2px 2px 4px red;"><b>Contact us</b></h2>
			<p style="color:white;font-size: 18px;"><b>You can directly contact to our fest staff coordinates .... </b></p>
			
<a href="contactus.php"><button class="btn btn-default">Know More <i class="fa fa-arrow-right"></i></button></a>

		</div>
	</div>
</div>
<br><br>

<div class="container-fluid" >
<div class="container" >

	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6" style="background-color: #000033; border-radius: 10px;">
			<br><br>
			<h3 style="text-align: center; color: white;">Yantra 2k18</h3>

			<div class="row" style="color: white; text-align: center; font-size: 20px;">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-3"></div>
				<div class="col-sm-3"></div>
				<div class="col-sm-3"></div>
			</div><br>







			<p id="demo"  style="color: white; font-size: 20px;text-align: center;">Loading...</p><br><br><br>
		</div>
		<div class="col-sm-3"></div>
	</div>


	

</div>

</div>
<br><br><br>

<div class="container">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 text-center">
			<h3 style="color: white;">College Address</h3>
			<iframe style="width:95%; " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30909.84756597967!2d78.2364003!3d14.442663099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xedbb309928332524!2sJNTUA+College+of+Engineering!5e0!3m2!1sen!2sin!4v1499275695390" height="563em"  frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-sm-3"></div>
	</div>
	
</div>



<br><br><br><br><br>



<script>
// Set the date we're counting down to
var countDownDate = new Date("Sep 25, 2018 23:59:59").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + " Days " + hours + " Hours "
    + minutes + " Min " + seconds + " Sec";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "Celebration Started..";
    }
}, 1000);
</script>


</body>
</html>




