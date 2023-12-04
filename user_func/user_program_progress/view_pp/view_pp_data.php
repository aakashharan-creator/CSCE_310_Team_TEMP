<?php

session_start();

// Error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Initialize  
$user_data = array();

// Connect
$conn = new mysqli('sql9.freemysqlhosting.net','sql9658278','ZX2Ybn3eNA','sql9658278');

// Check connect error
if ($conn->connect_error) {
  die("Connect failed: " . $conn->connect_error);
}

// Prepare statement
if($stmt = $conn->prepare("SELECT ce.* FROM Cert_Enrollment AS ce WHERE ce.UIN = ?")) {

  // Bind parameter
  $uin = "120"  
  if(!$stmt->bind_param("i", $uin)) {
     echo "Bind failed: " . $stmt->error;
     exit;
  }
   
  // Execute    
  if(!$stmt->execute()) {
     echo "Execute failed: " . $stmt->error;
     exit;
  }
  
  // Get results
  $result = $stmt->get_result();
   
  // Fetch data 
  if($row = $result->fetch_assoc()) {
    $user_data = array(  
      $row["CertE_Num"],
      $row["UIN"], 
      $row["Cert_ID"],
      $row["Status"],
      $row["Training_Status"],
      $row["Program_Num"],
      $row["Semester"],
      $row["Year"]
    );

  } else {
     echo "Fetch failed: " . $stmt->error;
     exit;
  }
   
} else {
   echo "Prepare failed: " . $conn->error;
   exit;
}

// Close connection
mysqli_close($conn);  

// Output JSON data
echo json_encode($user_data);

?>