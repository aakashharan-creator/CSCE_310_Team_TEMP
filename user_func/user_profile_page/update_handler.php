<?php
// This code is to push the create account form entries into the data base and create a new user account
session_start();
$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$First_Name = $_POST['First_name'];
$M_Initial = $_POST['M_initial'];
$Last_Name = $_POST['Last_Name'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
$Discord_Name = $_POST['Discord_Name'];
$gender = $_POST['gender'];
$hispanic = $_POST['hispanic'];
$race = $_POST['race'];
$citizen = $_POST['citizen'];
$first_gen = $_POST['first_gen'];
$major = $_POST['major'];
$minor1 = $_POST['minor1'];
$minor2 = $_POST['minor2'];
$grad = $_POST['grad'];
$School = $_POST['School'];
$classification = $_POST['classification'];
$phone = $_POST['phone'];
$type = $_POST['type'];
$date = $_POST['date'];
$gpa = $_POST['gpa'];

// query probably wrong order
$check_if_exists_in_user = "SELECT * FROM User WHERE (Username = '" . $Username . "' OR Email = '" . $Email . "' OR Discord_Name = '" . $Discord_Name . "') AND UIN != '" . $_SESSION["UIN"] . "';";
$check_if_exists_in_cs = "SELECT * FROM College_Student WHERE Phone = '" . $phone . "' AND UIN != '" . $_SESSION["UIN"] . "';";

$user_result = $conn->query($check_if_exists_in_user);
if (strlen($phone) != 9) {
	echo "Invalid value for Phone";
} else if ($user_result->num_rows >= 1) {
	echo "Account with that Username, Email, or Discord already exists.";
} else {
	$college_student_result = $conn->query($check_if_exists_in_user);
	if ($college_student_result->num_rows == 1)
		echo "Account with that phone already exists!";
	else {
		$role = 'student';
		$update_user = $conn->prepare("UPDATE User SET First_Name = ?, M_Initial = ?, Last_Name = ?, Username = ?, Password = ?, User_Type = ?, Email = ?, Discord_Name = ? WHERE UIN = ?");
		$update_user->bind_param('sssssssss', $First_Name, $M_Initial, $Last_Name, $Username, $Password, $role, $Email, $Discord_Name, $_SESSION["UIN"]);

		$update_college_student = $conn->prepare("UPDATE College_Student SET Gender = ?, Hispanic_or_Latino = ?, Race = ?, US_Citizen = ?, First_Generation = ?, DoB = ?, GPA = ?, Major = ?, Minor_1 = ?, Minor_2 = ?, Expected_Graduation = ?, School = ?, Classification = ?, Phone = ?, Student_Type = ? WHERE UIN = ?");
		$update_college_student->bind_param('ssssssssssssssss', $gender, $hispanic, $race, $citizen, $first_gen, $date, $gpa, $major, $minor1, $minor2,  $grad, $School, $classification, $phone, $type, $_SESSION["UIN"]);

		// push and error check
		$update_user->execute();
		$update_college_student->execute();
		
		$update_user->close();
		$update_college_student->close();

        $_SESSION["Username"] = $Username;

        header("Location: ./view_profile_info.php");
	}
}

$conn->close();
?>