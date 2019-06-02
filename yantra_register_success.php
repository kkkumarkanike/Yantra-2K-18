<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/box.css">
  <link rel="icon" type="image/icon" href="favicon.png">
<title>Registration Suceess</title>
<script src="components/counter.js"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  


<?php
require_once('db_config.php');


$id=rand(00000,99999);
$gender=$_POST["gen"];
$name=$_POST["name"];
$email=$_POST["email"];
$add=$_POST["add"];
$phone=$_POST["phone"];
$altphone=$_POST["altphone"];
$table=$_POST["event"];
$file="--";
if(($_POST['topic'])!=""){
$topic=$_POST["topic"];
}
else{
  $topic="-";
}

date_default_timezone_set("Asia/Kolkata");
$t=date('Y-m-d h:i:sa') ;
//file upload

if(isset($_POST['fileToUpload'])){


$target_dir = "files/";
$sla="-";
$ex=".pdf";
$target_file = $target_dir . $email.$sla.$table.$sla.$topic.$ex;
$file=$target_file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    echo "<div class='alert alert-warning'>
  Error in uploading file
</div>";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "pdf" ) {
    echo "<div class='alert alert-danger'>
  Only PDF files are allowed.....
</div>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<div class='alert alert-warning'>
  Your file was not uploaded...</div>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        

 } else {
        echo "<div class='alert alert-warning'>
  Your file was not uploaded.
</div>";
    }
}
}

?>



<?php

$sql="INSERT INTO $table(id,gender,name,email,address,phone,altphone,topic,file,t)VALUES('$id','$gender','$name','$email','$add','$phone','$altphone','$topic','$file','$t')";
                if(mysqli_query($conn,$sql)){
                    $mailsent=1;
                    ?>
<div class='alert alert-success'>
  Your Registration is sucessful. Please remember your registration id <span style="color: red;">"<?php echo $id; ?> "</span> for future reference. Thank you for registering to Yantra-2k18 Events.
</div>


                    <?php
                         }
                         else{
                          $mailsent=0;
                          ?>
                          <div class='alert alert-danger'>
  Your Registration is not successful. Due to following reasons<br> 1.You already registered for this event<br> 2.You have poor network connection <br> Please Try again.
</div>

                          <?php




                         }







?>





<!--- Sendind Mail -->
<?php


if($mailsent){
$subject = 'Your Registration '.$id.' Sucessful';
// Compose a simple HTML email message
$message = '<html><body style="text-align:left;">';
$message .= '<center><img src="http://www.Yantra-2k18.com/images/logo.png" width="150px" height="150px"></center><p style="font-size:18px;">Hello <b>'.$name.'</b>, Your Registration Id: <span style="color:red;">'.$id;

$message .= '</p> <p>Thank You for registering to Yantra Events.<br> Your Registration Details. <br> Registration Id: <b>'.$id.'</b> <br> Registered Event: <b>'.$table.'</b><br> Registered Topic: <b>'.$topic.'</b></p>';
$message .= '<p>Please remember your registration id for future reference...</p><p><center style="font-size:20px;"><b>Yantra 2k18</b></center></p>';
   
  require 'class/class.phpmailer.php';
    $mail = new PHPMailer;
    $mail->IsSMTP();                //Sets Mailer to send message using SMTP
    $mail->Host = 'smtp.gmail.com';   //Sets the SMTP hosts of your Email hosting, this for Godaddy
    $mail->Port = '587';                //Sets the default SMTP server port
    $mail->SMTPAuth = true;             //Sets SMTP authentication. Utilizes the Username and Password variables
    $mail->Username = 'yantra2k18team@gmail.com';          //Sets SMTP username
    $mail->Password = 'yantra2k1816191A03';         //Sets SMTP password
    $mail->SMTPSecure = 'tls';              //Sets connection prefix. Options are "", "ssl" or "tls"
    $mail->From = "yantra2k18team@gmail.com";          //Sets the From email address for the message
    $mail->FromName = "Yantra 2k18";        //Sets the From name of the message
    $mail->AddAddress($email);   //Adds a "To" address
    //$mail->AddCC($_POST["email"], $_POST["name"]);  //Adds a "Cc" address
    $mail->WordWrap = 50;             //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);              //Sets message type to HTML       
    $mail->Subject = $subject;        //Sets the Subject of the message
    $mail->Body = $message;       //An HTML or plain text message body
if ($mail->Send()) {
  $mailsend = "Your Complaint has been sent to concerned incharges..";
}
else{
  $mailsend = "";
}
?>

<div class='alert alert-success'>
Your registration details has been sent to your mail........
</div>


<?php
}



?>





<div>
    <center>
        <a href="registration.php"><button class="btn btn-primary">Go Back <i class="fa fa-arrow-circle-left"></i></button></a>
    </center>
</div>


<?php 


?>