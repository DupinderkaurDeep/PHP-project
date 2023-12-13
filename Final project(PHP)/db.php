<?php
$servername = "172.31.22.43";
$username = "Dupinder200553418";
$password = "LM2S7SYfYP";
$dbname = "Dupinder200553418";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>