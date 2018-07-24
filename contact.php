<?php
$myFName = $_POST['myFName'];
$myLName = $_POST['myLName'];
$myEmail = $_POST['myEmail'];
$myPhone = $_POST['myPhone'];
$myDate = $_POST['myDate'];
$myNights = $_POST['myNights'];
$myComments = $_POST['myComments'];
?>

<html>
<head>
    <title>Pacific Trails Resort :: Reservations</title>
    <link rel="stylesheet" type="text/css" href="pacific.css">
</head>

<body>
<div id="wrapper">
<h1>Pacific Trails Resort</h1>
<div id="content">
<h2>Hello <?php echo $myFName . " " . $myLName; ?>. We will be contacting you soon!</h2>
<h3>Here is the contact information you entered:</h3>
Email: <?php echo $myEmail; ?><br>
Phone: <?php echo $myPhone; ?><br>
<br>
<br>
<br>
<br>
<br>
<br>
<form action="#">

<input type="button" value = "Back" onclick="javascript:history.go(-1)" />

</form>
</div>
</div>

</div>

</body>
</html>

