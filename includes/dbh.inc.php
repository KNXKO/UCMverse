<?php

$servenName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phpproject01";


$conn = mysqli_connect($servenName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
