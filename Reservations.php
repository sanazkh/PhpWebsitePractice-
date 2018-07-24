<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?php

?>
<html>
<head>
    <title>Pacific Trails Resort :: Reservations</title>
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
<h2>Reservations at Pacific Trails</h2>
<h3>Contact Us Today!</h3>
 <p>Required fields are marked with an asterisk *.</p>
        <form method="post" action="Reservations.php" id="myForm">
        <input type="hidden" name="action" value="add_reserve">
    <div>
                <label for="myFName">First Name:</label>
                <input type="text" name="myFName" id="myFName"
                required="required" placeholder="your first name">
            </div>
            <div>
                <label for="myLName">Last Name:</label>
                <input type="text" name="myLName" id="myLName"
                required="required" placeholder="your last name">
            </div>
            <div>
                <label for="myEmail">E-mail:</label>
                <input type="email" name="myEmail" id="myEmail" size="40"
                required="required" placeholder="you@yourdomain.com">
            </div>
            <div>
                <label for="myPhone">Phone:</label>
                <input type="tel" name="myPhone" id="myPhone" size="12" maxlength="12">
            </div>
            <div>
                <label for="myDate">Arrival Date:</label>
                <input type="date" name="myDate" id="myDate">
            </div>
            <div>
                <label for="myNights">Nights:</label>
                <input type="number" name="myNights" id="myNights" min="1" max="14">
            </div>
            <div>
                <label for="myComments">Comments:</label>
                <textarea name="myComments" id="myComments" required="required"
                          rows="4" cols="60"></textarea>
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
