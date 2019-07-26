<?php
	$con = mysqli_connect('localhost', 'root', '', 'freelanceTutorials') or die(mysql_error());
	if (isSet($_POST['sentForm'])) {
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$query = mysqli_query($con, "SELECT * FROM `users` WHERE `username`='$user' AND `password`='$pass'") or die(mysql_error());
		echo $user.$pass;
		if (mysqli_num_rows($query) > 0) {
			$_SESSION['user'] = $user;
			echo 'Successful login.';
		}else{
			echo 'Failed login.';
		}
		mysqli_close($con);
	}
?>
