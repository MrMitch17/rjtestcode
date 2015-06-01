<!DOCTYPE html>
<html lang="en">

<?php
//Connect to MySql Server using mysqli
//These creds should be pulled from an Ansible generated config and not in php
$mysqli = new mysqli('localhost', 'rj', 'rj', 'rj');
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') ' . $mysqli->connect_error);
}

//Get an MD5 From MySQL
$results = $mysqli->query("SELECT MD5('hello world');")->fetch_array()[0];

print '<h1> MYSQL DB Test </h1>';
print '<p> This will issue and md5 agsinst the sql srver and return the md5 for hello world</p>';
print '<p>MD5: '.$results.'</p>';

//Close Connections
$mysqli->close();
?>

</html>
