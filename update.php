
<?php

include 'koneksi.php';
$id = $_POST['id'];
$buyer = $_POST['buyer'];
$items = $_POST['items'];
$total = $_POST['total'];

mysqli_query($conn, "UPDATE datapenjualan SET title='$title', author='$author', year='$year',
created_at='$created_at' WHERE id='$id'");

header("location:index.php?pesan=update");
?>