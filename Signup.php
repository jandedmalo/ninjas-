<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="signup.css" type="text/css" />
    <title>Signup Page</title>
    <style>
        #msg {
            visibility: hidden;
            min-width: 250px;
            background-color: yellow;
            color: #000;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            right: 36.5%;
            top: 30px;
            font-size: 17px;
        }

        #msg.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {top: 0; opacity: 0;}
            to {top: 30px; opacity: 1;}
        }

        @keyframes fadein {
            from {top: 0; opacity: 0;}
            to {top: 0; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
            from {top: 30px; opacity: 1;}
            to {top: 0; opacity: 0;}
        }
        @keyframes fadeout {
            from {top: 30px; opacity: 1;}
            to{top: 0; opacity: 0;}
        }
    </style>
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['email'])){
		$email = stripslashes($_REQUEST['email']); // removes backslashes
		$email = mysqli_real_escape_string($con,$email); //escapes special characters in a string
		$country = stripslashes($_REQUEST['country']);
		$country = mysqli_real_escape_string($con,$country);
		$state = stripslashes($_REQUEST['state']);
        $state = mysqli_real_escape_string($con,$state);
        $password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);


		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (country, state, password, email, trn_date) VALUES ('$country', '$state', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>

    <div class="signup">
        <form action="" method="POST">
            <h2 style="color: #fff">Ninja Team Sign Up</h2>
            <input type="email" name="email" placeholder="Your Email"><br><br>
            <input type="email" name="email" placeholder="Confirm Email"><br><br>
            <input type="text" name="country" placeholder="Country"><br><br>
            <input type="text" name="state" placeholder="State"><br><br>
            <input type="password" name="password" placeholder="password"><br><br>
            <input type="password" name="Confirm Password" placeholder="Confirm Password"><br><br>
            <input type="submit" name="submit" value="Sign up" onclick="myFunction()"><br><br>
            <div id="msg">Congratulations... You signed up successfully.</div>
            <script>
                function myFunction() {
                    var x = document.getElementById("msg");
                    x.className = "show";
                    setTimeout(function() { x.className = x.className.replace("show", ""); }, 3000);
                 }
            </script>
            Already have account? <a href="login.php" style="text-decoration: none; font-family: 'Play', sans-serif; color: yellow;">&nbsp;Log In</a>
        </form>
    </div> 
    <?php } ?>
</body>
</html>