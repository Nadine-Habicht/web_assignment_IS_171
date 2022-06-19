<?php

$connection = mysqli_connect("localhost", "root", "", "web_assignment");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$fname = $_POST['firstname'];
$lname = $_POST['lname'];
$yoe = $_POST['yoe'];
$yog = $_POST['yog'];
$headm = $_POST['headm'];
$fteacher = $_POST['fteacher'];
$results = $_POST['results'];
$occupation = $_POST['occupation'];
$address = $_POST['address'];
$email = $_POST['email2'];
$mnumber = $_POST['mnumber2'];

$sql = "INSERT INTO alumni_registration (fname, lastname, year_of_enrolment, year_of_graduation, headm, famous_teacher, results, occupation, address, email, mnumber) VALUES ('$fname', '$lname', '$yoe', '$yog', '$headm', '$fteacher', '$results', '$occupation', '$address', '$email', '$mnumber')";

if (mysqli_query($connection, $sql)){
	header("location:previousalumni1.php");
	exit();
} else {
	echo "ERROR: could not execute $sql.".mysqli_error($connection);
	exit();
}
?>