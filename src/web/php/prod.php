<!DOCTYPE html>
<html>
<body>

<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'project');
// connection error
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
// REGISTER USER
$sql = "SELECT id, username, email, img FROM users";
$result = $db->query($sql);
//echo $result;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        print "<br> id: ". $row["id"]. "<br> - Name: ". $row["username"]. "<br> - Email: " . $row["email"] . "<br>";
      print "<img src=\"".$row["img"]."\">";
     
    }
} else {
    print "0 results";
}
// close connection
$db->close();   
        ?> 



</body>
</html>