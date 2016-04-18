<?php
/**
 * Created by PhpStorm.
 * User: julius
 * Date: 4/17/2016
 * Time: 2:33 PM
 */


$dbPassword = "jiha89";
$dbUserName = "JuliusPHP";
$dbServer = "localhost";
$dbName = "PHPFundamentals";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if($connection->errno) {
    exit("database connection failed because: ".$connection->connect_error);
}



