<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['acc_user_name'];
	$password = $_POST['password'];
	$acct_type = "student";

	// Database connection
	$conn = new mysqli('sql9.freemysqlhosting.net', 'sql9658278', 'ZX2Ybn3eNA', 'sql9658278');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into Account(acc_user_name, acc_password, acc_type) values('?', '?', '?')");
		$stmt->bind_param("sss", $username, $password, $acct_type);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
}
?>

<!-- INSERT INTO Account (acc_user_name, acc_password, acc_type)
VALUES ("noah", "1234", "student");
 -->