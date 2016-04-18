<?php

$dbPassword = "jiha89";
$dbUserName = "JuliusPHP";
$dbServer = "localhost";
$dbName = "PHPFundamentals";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName); 

//print_r($connection);

//if $connection->connect_errno is neither 0 nor an empty string, then
//there has been an error
if($connection->connect_errno) {
    exit ("Database Connection Failed. Reason: ".$connection->error); 
}

//$query = "DELETE FROM Authors WHERE id = 4";
//$query = "UPDATE Authors SET pen_name = 'L.M. Montgomery' WHERE id =2";
//$query = "INSERT INTO Authors (first_name, last_name, pen_name) VALUES"
//        . "('Ronald Reuel', 'Tolkien', 'J.RR Tolkien')";

$query = "SELECT first_name, last_name, pen_name FROM Authors ORDER BY first_name";
$resultObj = $connection->query($query);

if($resultObj->num_rows > 0){
    while($singleRowFromQuery = $resultObj->fetch_assoc()){
//        print_r($singleRowFromQuery);
        echo "Author: ".$singleRowFromQuery["first_name"]."\n";
    }
}

echo "Newly Created Author Id: ".$connection->insert_id; 

$resultObj->close(); 
$connection->close(); 

