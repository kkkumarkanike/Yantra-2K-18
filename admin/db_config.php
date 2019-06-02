<?php
$servername = "localhost";
$username = "id6673557_yantra_2k18";
$password = "yantra2k18";
$dbname = "id6673557_yantra_2k18";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>