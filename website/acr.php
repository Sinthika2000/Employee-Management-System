<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Project";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM taskactivities";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Assign Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" href="style.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
         body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .container {
        width: 80%;
        background-color: ##BFC9CA;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h3 {
        text-align: left;
        color: #B2ABAE ;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 12px;
        border: 1px solid #ccc;
        text-align: center;
    }

    th {
        background-color: #DC7633;
        color: #F0B27A;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
	button{
		 padding: 12px;
        border: 1px solid #ccc;
		background-color:white;
	}
	button:hover {
		 background-color: skyblue ;
	}
    
    </style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
	
</head>
<body>
	<br />  
           <div class="container" style="width:500px;">
        <section class="main">
            <h1> All The Task And Activites Assigned</h1>

            <table class ="table">
                <tr>
                    <th>Task ID </th>
                    <th>Activity ID </th>
                    <th>Activity </th>
    </tr>
    <?php
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row["Tid"];?></td>
                <td><?php echo $row["Activityid"];?></td>
                <td><?php echo $row["Activity"];?></td>
                
                <tr>
                    <?php
        }
    }?>

    </section><table>
    </div>
    <button id="home" onclick="goToHomePage()" >Go to Home Page</button>

<script>
    function goToHomePage() {
        window.location.href = 'Rmenu.html';
    }
</script>
        </div>  
           <br />     

</body>
</html>
