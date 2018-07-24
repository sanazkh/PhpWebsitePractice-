<?php
function login($username1, $myPassword1) {
    global $db;
    $query = 'SELECT userName, password FROM newusers
              WHERE userName = :username1';
    $statement = $db->prepare($query);
    $row = mysql_fetch_array($query);

if($row["userName"]==$username1 && $row["password"]==$myPassword1){
    echo"You are a validated user.";
}
else{
    echo"Sorry, your credentials are not valid, Please try again.";
}

}
?>