<?php
include("auth.php"); //include auth.php file on all secure pages ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" href="signup.css" type="text/css" />
  
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
  <div class="form">
<p>Welcome <?php echo $_SESSION['email']; ?>!</p>
<p>This is secure area.</p>
<!-- <p><a href="dashboard.php">Dashboard</a></p> -->
<a href="logout.php">Logout</a>
</body>
</html>