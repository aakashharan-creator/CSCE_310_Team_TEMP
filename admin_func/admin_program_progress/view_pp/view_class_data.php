<?php

// Start session
session_start();

// Connect to database 
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

// Get UIN from session
$uin = $_SESSION['ViewUIN'];

$check_query = "SELECT * FROM College_Student WHERE UIN = '" . $uin . "';";
  $check_result = $conn->query($check_query);
  if ($check_result->num_rows >= 1) {
    // Define query 
    $sql = "SELECT * FROM Class_Enrollment WHERE UIN = '$uin'";

    // Execute query and get result 
    $result = mysqli_query($conn, $sql);
    
}
else {
    echo "That student does not exist could not view certifications<br>";
    echo "<a href='../program_progress_page.php'>Go back to program progress page</a>";
}


?>


<!DOCTYPE html>
<html>
<head>
  <title>View students current class progresss</title>
</head>

<body>

<h1>Classes for UIN: <?php echo $uin; ?></h1>

<table>
<thead>
  <tr>
    <th>CE_Num</th>  
    <th>UIN</th>
    <th>Class_ID</th>
    <th>Status</th> 
    <th>Semester</th> 
    <th>Year</th> 
    
  </tr>  
</thead>

<tbody>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>

  <tr>
    <td><?php echo $row['CE_Num']; ?></td>
    <td><?php echo $row['UIN']; ?></td>
    <td><?php echo $row['Class_ID']; ?></td> 
    <td><?php echo $row['Status']; ?></td>
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