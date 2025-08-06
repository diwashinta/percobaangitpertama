<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['buyer'];
    $author = $_POST['items'];
    $year = $_POST['total'];

    // SQL untuk menambahkan data baru
    $sql = "INSERT INTO datapenjualan ('buyers', 'items', 'total') VALUES ('$title', '$author', '$year')";


    if ($conn->query($sql) == TRUE) {
        header("location:index.php?pesan=input");
    } else {
        echo "Error: " . $sql . "<br" . $conn->error;
    }
}

$conn->close();