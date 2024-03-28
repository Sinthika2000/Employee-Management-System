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
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body {
        background-color: #EDBB99;
        font-family: Arial, sans-serif;
    }

    h2 {
        text-align: center;
    }

    table {
        width: 40%;
        border-collapse: collapse;
        border: 2px solid;
		 background-color: #FAE5D3 ;
    }

    th, td, button {
        padding: 20px;
    }

    th {
        background-color: #333;
        color: white;
    }

    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
	input[type="date"], input[type="text"] {
        width: 93%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        background-color: #2ECC71;
        color: #333;
        border: none;
        border-radius: 5px;
		padding: 10px 20px;
		margin-left: 10px;
        cursor: pointer;
    }

    button:hover {
        background-color: #239B56;
    }

    a.menu {
        text-decoration: none;
        background-color: #2ECC71;
        color: #333;
        padding: 10px 20px;
        border-radius: 5px;
        margin-left: 10px;
    }

    a.menu:hover {
        background-color: #239B56;
    }
</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Assign Task to Employee</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <center><form id="activity-form" action="assign.php" method="POST">
        <h2>Assign Task to Employee</h2>
        <table>
            <tr>
                <td>Employee ID:</td>
                <td>
                    <select name="eid" id="eid">
                        <?php
                        // Populate the dropdown with Employee IDs from the database
                        $sql = "SELECT Eid FROM employee";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row["Eid"] . "'>" . $row["Eid"] . "</option>";
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Task ID:</td>
                <td>
                    <select name="tid" id="tid">
                        <?php
                        // Populate the dropdown with Task IDs from the database
                        $sql = "SELECT Tid FROM task";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row["Tid"] . "'>" . $row["Tid"] . "</option>";
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date Assigned:</td>
                <td><input type="date" name="date" id="date"></td>
            </tr>
            <tr>
                <td>Activity ID:</td>
                <td>
                    <select name="aid" id="aid">
                        <?php
                        // Populate the dropdown with Activity IDs from the database
                        $sql = "SELECT activityid FROM taskactivities";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row["activityid"] . "'>" . $row["activityid"] . "</option>";
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Remarks:</td>
                <td><input type="text" name="remarks" /></td>
            </tr>
        </table><br><br>
        <button type="submit" name="sub" id="sub">Submit</button>
        <a class="menu" href="first.html"><strong>Back</strong></a>
    </form></center>
</body>
</html>
