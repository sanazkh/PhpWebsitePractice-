<?php
function add_user($myFName, $myLName, $username, $myPassword, $myEmail, $myPhone, $myAddress) {
    global $db;
    $query = 'INSERT INTO newUsers
                 (firstName, lastName, userName, password, emailAdd, phone, address)
              VALUES
                 (:myFName, :myLName, :username, :myPassword, :myEmail, :myPhone, :myAddress)';
    $statement = $db->prepare($query);
    $statement->bindValue(':myFName', $firstName);
    $statement->bindValue(':myLName', $lastName);
    $statement->bindValue(':username', $userName);
    $statement->bindValue(':myPassword', $password);
    $statement->bindValue(':myEmail', $emailAdd);
    $statement->bindValue(':myPhone', $phone);
    $statement->bindValue(':myAddress', $address);
    $statement->execute();
    $statement->closeCursor();

  
  
}
?>