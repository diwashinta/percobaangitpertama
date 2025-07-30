<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "databasealamanah";

// Changed $coon to $conn
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) { // Also changed here
    die("koneksi gagal: " . $conn->connect_error);
}
echo "koneksi berhasil";
?>