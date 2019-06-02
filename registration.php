<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
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
 .design0{
  border-radius: 0 px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 10px 25px 0 white;
  
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
<body onload="myFunction()">
	
	<?php 
	include 'components/navigation.php';
	?>
<center><h1 style="color: white;">Register here</h1></center>
<br><br>
<div class="container">
	<div class="row">

    <div class="col-sm-6" >
      <div class="design0">
      <br><br>
      <center><h2 style="color: white;">Yantra Registration</h2></center>
        <br><br>
        
         <!---------------------------modal--------------------------------->
<center><button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal1">Register <i class="fa fa-edit"></i></button></center>

  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog" style="padding-top: 50px;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background-color:   #e6e6e6;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" ><b>Yantra Registration</b> </h3>
        </div>
        <div class="modal-body" style="background-color:   #e6e6e6;">
         
<form action="yantra_register_success.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
      
      <div class="col-xs-3">
        <label for="ex2">Gender</label>
        <select class="form-control" name="gen" id="ex2">
    
    <option value="Ms">Ms</option>
    <option value="Mr">Mr</option>
    </select>
      </div>
      <div class="col-xs-5">
        <label for="ex3">Name</label>
        <input class="form-control" id="ex3" type="text" placeholder="Full Name" name="name" required  >
      </div>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="add">College Address</label>
      <input type="text" class="form-control" id="add" placeholder="College Address" name="add" required>
    </div>
    <div class="form-group row">
      
      <div class="col-xs-5">
        <label for="pn">Phone Number</label>
        <input class="form-control" id="pn" type="number" placeholder="contact number" name="phone" required>
      </div>
      <div class="col-xs-5">
        <label for="apn">Alternate Number</label>
        <input class="form-control" id="apn" type="number" placeholder="Alternate Number" name="altphone" >
      </div>
    </div>
    <!----------------event select--------------->
    <div class="form-group row">
      
      <div class="col-xs-5">
        <label for="ex2">Select Event:</label> 
        <select class="form-control" id="sell1" onchange="myFunction()" name="event" required>
          
        <option value="paper_presentation">Paper Presentation</option>
        <option value="poster_presentation">Poster Presentation</option>
        <option value="project_exihibition">Project Exihibition</option>
        <option value="shortfilm_contest">Shortfilm Contest</option>
        <option value="spot_events">Spot Events</option>
    
        </select>
      </div>
      <div class="col-xs-5" id="sub_topic" style="">
        <label for="result">Select Topic:</label>
        <select class="form-control" id="result" name="topic"></select>
        
      </div>
    </div>
   <!--------------event select--------------------->
    <div class="form-group">
      <label>Select file:</label><br>
      <input type="file" name="fileToUpload">
    </div>
    
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

        </div>

        <div class="modal-footer" style="background-color:   #e6e6e6;">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
         <!---------------------------modal end----------------------------->
        <br><br>
        </div>
    </div>
    <div class="col-sm-6">
      <div class="design0">
        <br><br>
      <center><h2 style="color: white;">Workshop Registration</h2></center>
        <br><br>
      
          <!---------------------------modal--------------------------------->
<center><button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal2">Register <i class="fa fa-edit"></i></button></center>

  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog" style="padding-top: 50px;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="background-color:   #e6e6e6;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" ><b>Workshop Registration</b> </h3>
        </div>
        <div class="modal-body" style="background-color:   #e6e6e6;">
         <form method="post" action="yantra_register_success.php">

    <div class="form-group row">
      
      <div class="col-xs-3">
        <label for="ex2">Gender</label>
        <select class="form-control" name="gen">
    
    <option>Ms</option>
    <option>Mr</option>
</select>
      </div>
      <div class="col-xs-5">
        <label for="name">Name</label>
        <input class="form-control" id="name" type="text" placeholder="Full Name" name="name" required  >
      </div>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="add">College Address</label>
      <input type="text" class="form-control" id="add" placeholder="College Address" name="add" required>
    </div>
    <div class="form-group row">
      
      <div class="col-xs-5">
        <label for="phone">Phone Number</label>
        <input class="form-control" id="phone" type="number" placeholder="contact number" name="phone">
      </div>
      <div class="col-xs-5">
        <label for="altphone">Alternate Number</label>
        <input class="form-control" id="altphone" type="number" placeholder="Alternate Number" name="altphone"  >
      </div>
    </div>
    <div class="form-group">
      <label for="sel1">Select Workshop:</label>
      <select class="form-control" id="sel1" name="event" required>
        
        <option value="vehicle_diagnosis">Vehicle Diagnosis</option>
        <option value="engine_assembly_and_dismantling">Engine Assembly and Dismantling</option>
        <option value="automation_studio">Automation Studio</option>
       
      </select>
    </div>
    
    
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>

        </div>
        <div class="modal-footer" style="background-color:   #e6e6e6;">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
         <!---------------------------modal end----------------------------->

        <br><br>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function myFunction(){
  var text;
  var event=document.getElementById("sell1").value;
  switch(event){
    case "paper_presentation":
                             text="<option>Automobile Engineering</option><option>Thermal Engineering</option><option>Robotics</option><option>Design</option><option>Fluid Mechanics And Turbo Machinery</option><option>Inter-disciplinary</option>";
                             document.getElementById("sub_topic").style.display='block';
                              break;
    case "poster_presentation":
                             text="<option>Advancement in Technical fields</option><option>Eco-friendly Technology</option><option>Save girl child and women</option><option>Contribution of an Engineer to the nation</option><option>Destruction of world by human for his selfishness</option>";
                             document.getElementById("sub_topic").style.display='block';
                              break;   
          default:
          text= "";
          document.getElementById("sub_topic").style.display='none';                                            
  }
  document.getElementById("result").innerHTML= text;
}

</script>


<br><br><br>
<div style="color: white; font-size: 20px;">
<center>Please use landscape mode for better view(mobile users).</center>
</div>


<br><br><br><br>

</body>
</html>




