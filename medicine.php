<?php
session_start();
$patient_id =$_SESSION['userid'];
if(!isset($_SESSION["userid"]))
{
  header("location: index.php");
  exit;
}?>
<html>
<head>
  <title>Dental system</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1; width: 80%; margin-left: 50px; margin-top: 100px;}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
button {
  background-color: #050A30;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  margin-left: 140px;
  border: none;
  cursor: pointer;
  width: 10%;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  
}
</style>
</head>
<body>
  <nav class="navbar navbar-inverse" style="background-color: rgb(0, 203, 134); border: none;">
<ul class="nav navbar-nav navbar-right"> 
    <li ><a href="home.php" style="color:#fff;">Back to home</a></li>
    </ul>
  </div>
</nav>
<div style="">
<div class="w3-container">
  <h3 style="margin-top: 100px; text-align: center;"> LIST OF MEDICINES</h3>
  
 <center><table border="1px" width="50%" style="margin-top:40px; margin-left: 20px;">
  <tr style="background-color: rgb(0, 203, 134); color: white;">
    <th style="text-align: center;">S_no.</th>
    <th style="text-align: center;">Medicine Name</th>
    <th style="text-align: center;">Medicine Type</th>
    <th style="text-align: center;">Medicine Cost</th>
    <th style="text-align: center;">Medicine Treatment Assessment</th>
  </tr>
  <?php
  // include 'connect.php';
  $servername = "localhost";
  $username = "root";
  $password = "";
  $conn = mysqli_connect($servername, $username, $password);
  mysqli_connect("localhost", "root","") or die(mysqli_error()); //Connect to server
  mysqli_select_db($conn,"dentalsystem") or die("Cannot connect to database"); //connect to database
  $sql= "SELECT * from tbl_medicine ";
  
  $query = mysqli_query($conn,$sql); // SQL Query
  $counter=1;
  while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
  {
    $med_id=$row["med_id"];
    
    ?>
    <tr>
      <td align="center"><?php echo $counter; ?> </td>
      <td align="center"><?php echo $row['med_name'] ;?> </td>
      <td align="center"><?php echo $row['med_type'] ;?></td>
      <td align="center"><?php echo $row['med_cost'] ;?></td>
      <td align="center"><?php echo $row['med_treatment_assessment'] ;?></td>
  </tr>

    <?php
 $counter++;
  }
  ?>
</div><!-- /.container-fluid -->
</div><!-- End of Main Content -->
</table></center>

</div>
</div>
<br>
</body>
</html>