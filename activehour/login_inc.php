<?php  //Start the Session
	session_start();
	 require('connect.php');
	if (isset($_POST['email']) and isset($_POST['pwd'])){
		$email = $_POST['email'];
		$pwd = $_POST['pwd'];
		$query = "SELECT * FROM users WHERE email='$email' and pwd='$pwd';";
		 
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($result);
		
		if ($count == 1){
			$_SESSION['email'] = $email;
			header("location:flights.php");
			exit();
		}

		else{
			header("location:home.php?login=failed");
			exit();
			//$fmsg = "Invalid Login Credentials.";
		}
	}
	//3.1.4 if the user is logged in Greets the user with message
	/*if (isset($_SESSION['email'])){
	$Email = $_SESSION['email'];
		header("location:home.php?login=success");
	 
	} else{
		echo "Your Email or Password is wrong";
	}*/
?>
