<?php
    session_start();
	if(!isset($_SESSION['username'])) {
		header("Location: login.php");
	}


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <p><?php echo $_SESSION['Username']; ?></p>
    </body>
</html>
