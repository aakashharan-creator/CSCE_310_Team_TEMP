
<?php

// Start session
session_start();

// Connect to database 
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

// Define query 
//$sql = "SELECT * FROM Cert_Enrollment WHERE Status = 'Done';";
$sql = "SELECT * FROM cert_in_progress WHERE Status = 'In Progress';";

// Execute query and get result 
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html>
<head>
  <title>View students with in progress certificates</title>
</head>

<body>

<h1>In progress certificates: </h1>

<table>
<thead>
  <tr> 
    <th>UIN</th>
    <th>Status</th> 
  </tr>  
</thead>

<tbody>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>

  <tr>
    <td><?php echo $row['UIN']; ?></td>
    <td><?php echo $row['Status']; ?></td>
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