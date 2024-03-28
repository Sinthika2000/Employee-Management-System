<?php  
 $connect = mysqli_connect("localhost", "root", "", "project");  
 $sql = "SELECT * FROM assign";

 
   
 $result = mysqli_query($connect, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Employee Assign Report</title>  
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
        background-color: #EDC7CF;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h3 {
        text-align: left;
        color: #273746;
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
</style>

           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <center><h3>Employee Assign Report</h3></center><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>Eid</th>  
                               <th>Tid</th>
                               <th>Activity id</th>
                               <th>Assign Date</th>
                               <th>Remark</th> 
                              
                          </tr>  
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["Eid"];?></td>  
                               <td><?php echo $row["Tid"]; ?></td> 
                               <td><?php echo $row["Dateassign"]; ?></td>
                               <td><?php echo $row["Activityid"]; ?></td>  
                               <td><?php echo $row["Remarks"]; ?></td>
                               
                          </tr>
                          
                          <?php  
                               }  
                          }  
                          ?>  
                     </table>  
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
