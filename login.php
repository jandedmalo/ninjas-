<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">git 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
</head>
<body>

<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['email'])){
		
		$email = stripslashes($_REQUEST['email']); // removes backslashes
		$email = mysqli_real_escape_string($con,$email); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE email='$email' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['email'] = $email;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>

    <div class="brand">
        <h1>(HNG) Ninjas Team</h1>
    </div>
    <div class="signin">
        <form action="" method="post">
            <h2 style="color: white">Log In</h2>
            <input type="email" name="email" placeholder="Email"><br><br>
            <input type="password" name="password" placeholder="Password here"><br><br>
            <input type="submit" name="submit" value="Log In"></a><br><br>
            <div id="container">
            <br><br><br>
            Don't have account?<a href="signup.php" style="font-family: 'Play', sans-serif;">&nbsp;Sign Up</a>
        </form>
    </div>
    <?php } ?>
</body>
</html>