<?php
$Eid=$_POST["txtid"];
$telephone=$_POST["txtt"];
$Name=$_POST["txtn"];
$email=$_POST["txte"];
$Designation=$_POST["txtd"];

//Create Connection
$conn = mysqli_connect("localhost", "root", "", "project");
$sql="INSERT INTO employee Values('$Eid', '$telephone', '$Name', '$email', '$Designation')";

if(mysqli_query($conn, $sql)){
	echo"New Record Created Successfully";}
else{
	echo "Error:".$sql."<br>".mysqli_error($conn);}
mysqli_close($conn);
?>