<?php
$severName  ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="rusltech_login";

$conn = mysqli_connect($severName,$dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("connection failed :".mysqli_connect_error());
}
