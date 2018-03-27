<?php

	// This is all a test. No actual data is being used.

	session_start();

	$user = 'root';
	$password = 'root';
	$db = 'test_db';
	$host = 'localhost';
	$port = 3306;

	$connect = mysqli_connect($host, $user, $password, $db);

	// Check connection
	if ($connect->connect_error) {
	    die("Connection failed: " . $connect->connect_error);
	}

	// If username is already signed in, go to index file.
	if (isset($_SESSION['Username'])) {
		header("Location: index.php");
	}

	// beisz iloveyou143
	if (isset($_POST['login'])) {

		// Get data from post
		$username = $_POST['Username'];
		$password = $_POST['Password'];

		if ($stmt = $connect->prepare("SELECT * FROM users WHERE users.Username = ?")) {

			$stmt->bind_param("s", $username);
			$stmt->execute();

			$userresult = $stmt->get_result();
			$userinfo = $userresult->fetch_assoc();

			if ($userinfo) {
				if ($userinfo['Password'] == md5($password)) {
					$_SESSION['Username'] = $userinfo['Username'];
					$stmt->close();
					header("Location: index.php");
					die();
				} else {
					echo "invalid password";
				}
			} else {
				echo "invalid username";
			}

			$stmt->close();
		} else {
			echo "FAIL IN prepare";
		}
	}


 ?>


<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="myStyle.css">
	<script src="myScript.js"></script>

</head>
<body>

<!-- Navigation bar -->
<div>
    <form class="" action="" method="post">
        <label for="Username">Username</label>
        <input type="text" name="Username" id="Username" value="">
        <label for="Password">Password</label>
        <input type="Password" name="Password" value="">
        <input type="submit" name="login" value="login">
    </form>
</div>

<div>
  <footer id="foot">
    <p>Copyright &copy; 2017 Umbrella</p>
  </footer>
</div>

</body>
</html>
