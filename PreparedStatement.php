<?php

$dbPassword = "jiha89";
$dbUserName = "JuliusPHP";
$dbServer = "localhost";
$dbName = "PHPFundamentals";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if($connection->errno) {
    die("Failed to connect to the Database because".$connection->connect_error);
}

$tempFirstName = "Lucy";

$query = "SELECT first_name, last_name, pen_name FROM Authors WHERE first_name = ?";
$statementObj = $connection->prepare($query);

$statementObj->bind_param("s", $tempFirstName);
$statementObj->execute();

$statementObj->bind_result($firstName, $lastName, $penName);
$statementObj->store_result();

if($statementObj->num_rows > 0) {
    while($statementObj->fetch()){
        echo $firstName." ".$lastName." aka ".$penName.PHP_EOL; 
    }
}

$statementObj->close();
$connection->close();

