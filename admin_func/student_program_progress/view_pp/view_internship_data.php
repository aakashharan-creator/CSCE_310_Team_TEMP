<?php

// Start session
session_start();

// Connect to database 
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

// Get UIN from session
$uin = $_SESSION['ViewUIN'];

// Define query 
$sql = "SELECT * FROM Intern_App WHERE UIN = '$uin'";

// Execute query and get result 
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html>
<head>
  <title>View students current internship progresss</title>
</head>

<body>

<h1>Internships for UIN: <?php echo $uin; ?></h1>

<table>
<thead>
  <tr>
    <th>IA_Num</th>  
    <th>UIN</th>
    <th>Intern_ID</th>
    <th>Status</th>
    <th>Year</th> 
    
  </tr>  
</thead>

<tbody>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>

  <tr>
    <td><?php echo $row['IA_Num']; ?></td>
    <td><?php echo $row['UIN']; ?></td>
    <td><?php echo $row['Intern_ID']; ?></td> 
    <td><?php echo $row['Status']; ?></td>
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