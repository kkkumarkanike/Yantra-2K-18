<?php
 require_once('db_config.php');

if(isset($_POST['submit'])){
	$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    	        










                $id=rand(00000,99999);
                $gender=$_POST["gen"];
                $name=$_POST["name"];
                $email=$_POST["email"];
                $add=$_POST["add"];
                $phone=$_POST["phone"];
                $altphone=$_POST["altphone"];
                $table=$_POST["event"];
                $topic=$_POST["topic"];
                $file=$_FILES['file']['size'];
                date_default_timezone_set("Asia/Kolkata");

                $t=date('Y-m-d h:i:sa') ;

                $sql="INSERT INTO $table(id,gender,name,email,address,phone,altphone,topic,file,t)VALUES('$id','$gender','$name','$email','$add','$phone','$altphone','$topic','$file','$t')";
                if(mysqli_query($conn,$sql)){
                	echo"uploaded";
                }

    } 
    else
    {
    	echo "file not uploaded";
    }

}


?>




<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>