<?php
    session_start();

	if(!isset($_SESSION['Username'])) {
		header("Location: login.php");
	}

	$USER_ID = $_SESSION['Username'];

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="myStyle.css">
        <title></title>
    </head>
    <body>

        <div class="navbar">
            <li>
                <ul class="sublist">
                    <a href="#">Home</a>
                </ul>
                <ul class="sublist">
                    <a href="#">About Us</a>
                </ul>
            </li>
        </div>


        <div class="popup">
            <form class="" action="" method="post">
                <div class="">
                    <label for="Username">Username</label>
                    <input type="text" name="Username" value="">
                </div>

                <div class="">
                    <label for="Lastname">Last name</label>
                    <input type="text" name="Lastname" value="">
                </div>

                <div class="">
                    <label for="Firstname">First Name</label>
                    <input type="text" name="Firstname" value="">
                </div>

                <div class="">
                    <input type="submit" name="" value="submit">
                </div>
            </form>
        </div>




        <div class="">
            <p><?php echo "Hello, " .$USER_ID; ?></p>
        </div>

    </body>
</html>
