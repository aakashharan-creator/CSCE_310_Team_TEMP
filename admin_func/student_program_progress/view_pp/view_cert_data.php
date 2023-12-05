<?php

// Start session
session_start();

// Connect to database 
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

// Get UIN from session
$uin = $_SESSION['ViewUIN'];

// Define query 
$sql = "SELECT * FROM Cert_Enrollment WHERE UIN = '$uin'";

// Execute query and get result 
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html>
<head>
  <title>View students current certificate progresss</title>
</head>

<body>

<h1>Certificates for UIN: <?php echo $uin; ?></h1>

<table>
<thead>
  <tr>
    <th>Cert Num</th>  
    <th>UIN</th>
    <th>Cert_ID</th>
    <th>Status</th> 
    <th>Training Status</th> 
    <th>Program Number</th> 
    <th>Semester</th> 
    <th>Year</th> 
    
  </tr>  
</thead>

<tbody>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>

  <tr>
    <td><?php echo $row['CertE_Num']; ?></td>
    <td><?php echo $row['UIN']; ?></td>
    <td><?php echo $row['Cert_ID']; ?></td> 
    <td><?php echo $row['Status']; ?></td>
    <td><?php echo $row['Training_Status']; ?></td>
    <td><?php echo $row['Program_Num']; ?></td>
    <td><?php echo $row['Semester']; ?></td>
    <td><?php echo $row['Year']; ?></td>
    
  </tr>

<?php } ?>

</tbody>
</table>

</body>
</html>

<?php 

// Close database connection
mysqli_close($conn);

?>