<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <litle>CRUD Website</litle>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>CRUD Website</h1>
        <!-- Form untuk input data -->
         <?php
         if (isset($_GET['pesan'])) {
            $pesan = $_GET['pesan'];
            if ($pesan == "input") {
                echo "Data berhasil di input.";
            } else if ($pesan == "update") {
                echo "Data berhasil di update.";
            } else if ($pesan == "hapus") {
                echo "Data berhasil di hapus.";
            }
         }
?>
<form action="insert.php" method="post">
    <input type="text" name="buyer" placeholder="buyer">
    <input type="text" name="items" placeholder="items">
    <input type="text" name="total" placeholder="total">
    <button type="submit">Tambah</button>
</form>

<!--- Tabel untuk menampilkan data -->
<table>
    <tr>
        <th>ID</th>
        <th>Buyer</th>
        <th>Items</th>
        <th>Total</th>
        <th>Aksi</th>
        </tr>
        <!--- Data dari database akan di tampilkan di sini -->
        <?php
        $query_mysql = mysqli_query($conn, "SELECT * FROM datapenjualan") or die(mysqli_error($conn));
        $nomor = 1;
        while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['buyer']; ?></td>
            <td><?php echo $data['items']; ?></td>
            <td><?php echo $data['total']; ?></td>
            <td>
                <a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                <a class="hapus" href="delete.php?id=<?php echo $data['id']; ?>">Hapus</a>
            </td>
        </tr>
    <?php } ?>
</table>
</div>
</body>

</html>



    

