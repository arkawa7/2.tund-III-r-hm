<?php

	// LOGIN.PHP
	
	$email_error= "";
	
	//echo $_POST["email"];
	
	//kontrollime et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "keegi vajutas nuppu";
		
		//kontrollin, et e-post ei ole tühi
		
		$email_error = "";
		
	if(empty($_POST["email"] ) ) {
			$email_error = "See vali on kohustuslik";
		}
	}

?>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<h2>Log in</h2>
	<form action="login.php" method="POST" >
		<input name="email" placeholder="E-post"> <?php echo $email_error; ?><br><br>
		<input name="password" type="password" placeholder="Parool"> <br><br>
		<input type="submit" value="Log in">
	</form>
	
	<h2>Create user</h2>
</body>

</html>