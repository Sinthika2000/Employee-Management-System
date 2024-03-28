
<?php
	$Tid = $_POST["Tid"];
    $Name = $_POST["Name"];
    $Start_date = $_POST["Start_date"];
	$End_date = $_POST["end_date"];
	$Nature = $_POST["nature"];


//Create Connection
$conn = mysqli_connect("localhost", "root", "", "project");
$sql="INSERT INTO Task Values('$Tid', '$Name', '$Start_date', '$End_date', '$Nature')";

if(mysqli_query($conn, $sql)){
	echo"New Record Created Successfully";}
else{
	echo "Error:".$sql."<br>".mysqli_error($conn);}
mysqli_close($conn);
?>
    
    
   