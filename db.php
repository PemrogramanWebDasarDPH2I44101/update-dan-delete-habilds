<?php
$sname = "localhost";
$user = "admin";
$pass = "1234";
$db = "WebDas";

$connection = mysqli_connect($sname,$user,$pass,$db);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
