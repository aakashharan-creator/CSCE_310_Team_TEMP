<?php
// Now $conn is available to use for queries
require_once '../../../db_connect.php';

// Start session
session_start();

// Define query 
$sql = "SELECT * FROM Cert_Enrollment WHERE Status = 'Done';";

// Execute query and get result 
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html>
<head>
  <title>View students with finished certificates</title>
</head>

<body>

<h1>Finished certificates: </h1>

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
echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
?>