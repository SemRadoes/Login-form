<?php
$serverName = "localhost";
$dBuserName = "root";
$dBPassName = "";
$dBName = "PHPLoginsystem";
$connection = mysqli_connect($serverName, $dBuserName, $dBPassName, $dBName);

if(!$connection){
    die("Connection failed: " . mysqli_connect_error());
}