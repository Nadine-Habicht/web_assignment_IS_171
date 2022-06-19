<?php

$connection = mysqli_connect("localhost", "root", "", "web_assignment");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$surname = $_POST['sname'];
$uname = $_POST['uname'];
$dob = $_POST['dob'];
$pword = $_POST['pword'];
$file = $_POST['file'];
$email = $_POST['email1'];
$mnumber = $_POST['mnumber1'];
$fbook = $_POST['fbook'];
$twitter = $_POST['twitter'];
$instagram = $_POST['instagram'];

$sql = "INSERT INTO register (fname, mname, surname, username, dob, password, cv, email, mnumber, facebook, twitter, instagram) VALUES ('$fname', '$mname', '$surname', '$uname', '$dob', '$pword', '$file', '$email', '$mnumber', '$fbook', '$twitter', '$instagram')";

if (mysqli_query($connection, $sql)){
	header("location:newregister.html");
	exit();
} else {
	echo "ERROR: could not execute $sql.".mysqli_error($connection);
	exit();
}
?>