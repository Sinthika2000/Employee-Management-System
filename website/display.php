<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Details</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('picture.JPG');
            background-position: center;
            background-size: cover;
            min-height: 100vh;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        div {
            background-color: #fff;
            max-width: 800px;
            margin: 0 auto;
            padding: 3%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            font-size: 24px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background-color: #F1C40F;
            color: #fff;
            padding: 10px;
        }

        td {
            padding: 10px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        #btn {
            background-color:  #E67E22;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            padding: 10px;
            margin-top: 20px;
        }

        #btn:hover {
            background-color: #0056b3;
        }
		a{
		background-color: #F9E79F;
        color:white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
		width: 100%;
		}
		a:hover {
		background-color: #F1C40F; 

}
    </style>
    
</head>

<body>
<div>
<h2>Assign Details</h2>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve Eid from the form
        $eid = $_POST["eid"];

        // Establish a database connection (assuming you have a database connection setup)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL query to retrieve data based on Eid
        $sql = "SELECT * FROM assign WHERE eid = $eid";

        // Execute the query
        $result = $conn->query($sql);

        // Display data in a table
        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr><th>eid</th><th>tid</th><th>dateassign</th><th>activityid</th><th>remarks</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['Eid']}</td><td>{$row['Tid']}</td><td>{$row['Dateassign']}</td><td>{$row['Activityid']}</td><td>{$row['Remarks']}</td></tr>";
            }

            echo "</table>";
        } else {
            echo "No records found for Eid: $eid";
        }

        // Close the database connection
        $conn->close();
    } else {
        // If the form is not submitted, redirect to the form page
        header("Location: index.html");
    }
    ?>


<br>
<br>

    <h2>Your Task and Activity Details</h2>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve Eid from the form
        $eid = $_POST["eid"];

        // Establish a database connection (assuming you have a database connection setup)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL query to retrieve data based on Eid
        $sql = "SELECT a.eid, a.tid, t.name, ta.activity 
                FROM assign a
                INNER JOIN task t ON a.tid = t.tid
                INNER JOIN taskactivities ta ON a.activityid = ta.activityid
                WHERE a.eid = $eid";

        // Execute the query
        $result = $conn->query($sql);

        // Display data in a table
        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr><th>eid</th><th>tid</th><th>name</th><th>activity</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['eid']}</td><td>{$row['tid']}</td><td>{$row['name']}</td><td>{$row['activity']}</td></tr>";
            }

            echo "</table>";
        } else {
            echo "No records found for Eid: $eid";
        }

        // Close the database connection
        $conn->close();
    } else {
        // If the form is not submitted, redirect to the form page
        header("Location: index.html");
    }
    ?>
    <br>
    <p><center><a href="display.html"><input type="submit" class="btn btn-primary" value="Back" name="submit"></a></center></p>
    
</div>

</body>

</html>
