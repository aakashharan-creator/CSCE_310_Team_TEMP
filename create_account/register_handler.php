
<?php
// This code is to push the create account form entries into the data base and create a new user account

$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$UIN = $_POST['UIN'];
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

if (strlen($UIN) != 9  || !is_numeric($UIN)) {
	echo "Invalid value for UIN";
	echo "<a href='./register.php' style='position: absolute; top: 25px; right: 25px'>Go back</a>";
} else if (strlen($phone) != 10) {
	echo "Invalid value for Phone";
	echo "<a href='./register.php' style='position: absolute; top: 25px; right: 25px'>Go back</a>";
}
else if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
	echo "Invalid value for Email";
	echo "<a href='./register.php' style='position: absolute; top: 25px; right: 25px'>Go back</a>";
} else {

	// query probably wrong order
	$check_if_exists_in_user = "SELECT * FROM User WHERE UIN = '" . $UIN . "' OR Username = '" . $Username . "' OR Email = '" . $Email . "' OR Discord_Name = '" . $Discord_Name . "';";
	$check_if_exists_in_cs = "SELECT * FROM College_Student WHERE Phone = '" . $phone . "';";

	$user_result = $conn->query($check_if_exists_in_user);
	if ($user_result->num_rows >= 1) {
		echo "Account with that UIN, Username, Email, or Discord already exists.";
		echo "<a href='./register.php' style='position: absolute; top: 25px; right: 25px'>Go back</a>";
	} else {
		$college_student_result = $conn->query($check_if_exists_in_user);
		if ($college_student_result->num_rows == 1)
			echo "Account with that phone already exists!";
		else {
			$role = 'student';
			$stmt = $conn->prepare("INSERT INTO User (UIN, First_Name, M_Initial, Last_Name, Username, Password, User_Type, Email, Discord_Name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
			$stmt->bind_param('sssssssss', $UIN, $First_Name, $M_Initial, $Last_Name, $Username, $Password, $role, $Email, $Discord_Name);

			$add_college_student = $conn->prepare("INSERT INTO College_Student (UIN, Gender, Hispanic_or_Latino, Race, US_Citizen, First_Generation, DoB, GPA, Major, Minor_1, Minor_2, Expected_Graduation, School, Classification, Phone, Student_Type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
			$add_college_student->bind_param('ssssssssssssssss', $UIN, $gender, $hispanic, $race, $citizen, $first_gen, $date, $gpa, $major, $minor1, $minor2,  $grad, $School, $classification, $phone, $type);

			// push and error check
			$stmt->execute();
			$add_college_student->execute();

			$stmt->close();
			$add_college_student->close();

			header("Location: ../../index.php");
		}
	}
}
$conn->close();
?>