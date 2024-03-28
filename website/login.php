<?php
//start the session
session_start();

?>

<html>
    <body>
        <?php

        $uname=$_POST["username"];
        $password=$_POST["password"];
        $role=$_POST["Role"];
        $_SESSION["Role"] =$_POST["Role"];


        $conn=mysqli_connect("localhost","root" , "" , "project");
        if(!$conn){
         die ("Connection faild:" . mysqli_connect_error());
            }
     



        $sql = "SELECT username,password,Role FROM users
         WHERE username='$uname' AND Role='$role' AND password='$password'";



        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) >0) {
            
            if( $_SESSION["Role"] =="Employee" ){
                header("Location: http://localhost/website/emp1.html");
               
            }
            else{
                header("Location: http://localhost/website/first.html");
            }
              
        } else {

            echo "Login failed. Invalid username or password.";
        }
      
        
        
        mysqli_close($conn);


?>

</body>

</html>