<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?php
require('AddUser_db.php');
$action = filter_input(INPUT_POST, 'action');
if($action == 'add_user'){
    $myFName = filter_input(INPUT_POST, 'myFName');
    $myLName = filter_input(INPUT_POST, 'myLName');
    $username = filter_input(INPUT_POST, 'username');
    $myPassword = filter_input(INPUT_POST, 'myPassword');
    $mycPassword = filter_input(INPUT_POST, 'mycPassword');
    $myEmail = filter_input(INPUT_POST, 'myPassword', FILTER_VALIDATE_EMAIL);
    $myPhone = filter_input(INPUT_POST, 'myPhone');
    $myAddress = filter_input(INPUT_POST, 'myAddress');
    if ($myFName == NULL || $myLName == NULL || $username == NULL || 
            $myPassword == NULL || $mycPassword == NULL || $myEmail == NULL || $myEmail == FALSE
            || $myPhone == NULL || $myAddress == NULL || $myPassword != $mycPassword) {
        echo "Invalid data. Check all fields and try again.";
    }
    else { 
        add_user($myFName, $myLName, $username, $myPassword, $myEmail, $myPhone, $myAddress);
        $msg = "Congratulations! Your information has added to our database. Now, you can use our services.";

        $msg = wordwrap($msg,150);

        mail($myPassword,"Registration Complete!",$msg);
    }
}
?>
<html>
<head>
    <title>Register</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="pacific.css">
</head>

<body>
<div id="wrapper">
<h1>Pacific Trails Resort</h1>
<?php
include 'navbar.php'
?>
<div id="content">
<h2>Registeration at Pacific Trails</h2>
<h3>Register Today!</h3>
<form method="post" action="Register.php" id="myForm">
        <input type="hidden" name="action" value="add_user">
    <div>
                <label for="myFName">First Name:</label>
                <input type="text" name="myFName"
                required="required" placeholder="your first name">
            </div>
            <div>
                <label for="myLName">Last Name:</label>
                <input type="text" name="myLName"
                required="required" placeholder="your last name">
            </div>
            <div>
            <div>
                <label for="myUserName">Username:</label>
                <input type="text" name="username">
            </div>
            <div>
                <label for="myPassword">Password:</label>
                <input type="password" name="myPassword">
            </div>
             <div>
                <label for="mycPassword">Confirm Password:</label>
                <input type="password" name="mycPassword">
            </div>
             <div>
                <label for="myEmail">E-mail:</label>
                <input type="email" name="myEmail" size="50"
                required="required" placeholder="you@yourdomain.com">
            </div>
            <div>
                <label for="myPhone">Phone:</label>
                <input type="tel" name="myPhone" size="16" maxlength="12">
            </div>
           
            
            <div>
                <label for="myAddress">Address:</label>
                <textarea name="myAddress" required="required"
                          rows="3" cols="50"></textarea>
            </div>
            <div id="mySubmit">
                <input type="submit" value="Submit">
                
            </div>

</form>
        <br>
        <br>

<div id="contact">
  <span class="resort">Pacific Trails Resorts </span> 
   <br>
   12010 Pacific Trails Road
   <br>
   Zephyr, CA 95555
   <br>
   888-555-5555
</div>
<br>
<br>
<br>
<br>
<br>
<br>

<div id="footer">
    Copyright &copy: 2011 Pacific Trails Resort
    <br>
    <a href="">sanaz@khosravi.com</a>
</div>
</div>
</div>
</body>
</html>
