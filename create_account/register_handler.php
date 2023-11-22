
<?php
// This code is to push the create account form entries into the data base and create a new user account

$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278'); 

if($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$UIN = $_POST['UIN'];
$First_Name = $_POST['First_name']; 
$M_Initial = $_POST['M_Initial'];
$Last_Name = $_POST['Last_Name'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$User_Type = $_POST['User_Type'];
$Email = $_POST['Email'];
$Discord_Name = $_POST['Discord_Name'];

// query probably wrong order
$stmt = $conn->prepare("INSERT INTO User (UIN, First_Name, M_Initial, Last_Name, Username, Password, User_Type, Email, Discord_Name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param('sssssssss',$UIN, $First_Name, $M_Initial, $Last_Name, $Username, $Password, $User_Type, $Email, $Discord_Name);

// push and error check
if($stmt->execute()) {
  echo "Registration successful welcome $First_Name";  
} else {
  echo "Error inserting data: " . $conn->error;
}

$stmt->close();
$conn->close();
?>