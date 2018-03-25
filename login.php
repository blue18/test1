<?php

	session_start();

	$user = 'root';
	$password = 'root';
	$db = 'test_db';
	$host = 'localhost';
	$port = 3306;

	$link = mysqli_init();
	$success = mysqli_real_connect(
	   $link,
	   $host,
	   $user,
	   $password,
	   $db,
	   $port
	);

	if ($success) {
		echo "Database connected.";
	}

	if (isset($_SESSION['username'])) {
		header("Location: index.php");
	}

/*
	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($stmt = $conn->prepare("SELECT * FROM Users WHERE Login = ? AND Current = '1'")) {

			$stmt->bind_param("s", $username);
			$stmt->execute();

			$userresult = $stmt->get_result();
			$userinfo = $userresult->fetch_assoc();

			if ($userinfo) {
				if ($userinfo['Password'] == md5($password)) {
					$_SESSION['userid'] = $userinfo['EmployeeId'];
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
			echo "something went wrong";
		}
	}

*/
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
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="">
        <label for="password">Password</label>
        <input type="password" name="password" value="">
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
