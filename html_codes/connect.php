<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "xceptional";

$conn = mysqli_connect($host, $username, "", $dbname);
if (!$conn) {
    die("connection failed" . mysqli_connect_error());
} else {
    echo "<script> alert('connected successfully');</script>";
}
?>