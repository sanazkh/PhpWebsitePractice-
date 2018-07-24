<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?php
require('login_db.php');
$action = filter_input(INPUT_POST, 'action');
	if($action == "login"){
		$myUserName1 = filter_input(INPUT_POST, '$myUserName1');
		$myPassword1 = filter_input(INPUT_POST, '$myPassword1');
		    if ($myUserName1 == NULL || $myPassword1 == NULL) {
        echo "Insert Data. Check all fields and try again.";
        
    } else { 
        login($username1, $myPassword1);
    }
	}
?>
<html>
<head>
</head>

<body>

<div id="nav">
    <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="Register.php">Register</a></li>
   <li><a href="yurt.php">Yurts</a></li>
    <li><a href="activities.php">Activities</a></li>
   <li><a href="Reservations.php">Reservations</a></li>
   </ul>
    <br>
    <br>
    <br>
    <form action="navbar.php" method="post" id="loginForm">
		<input type="hidden" name="action" value="login">
         <div>
                <label for="myUserName1">Username:</label>
                <br>
                <input type="text" name="username1" id="myUserName1">
            </div>
            <div>
                <label for="myPassword1">Password:</label>
                <br>
                <input type="password" name="myPassword1" id="myPassword1">
            </div>
            <div id="mySubmit1">
                <input type="submit" value="Login">
            </div>
    </form>
</div>

</body>
</html>
