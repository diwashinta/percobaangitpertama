<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Website</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <div class="container">
        <h1>CRUD Website</h1>
        <!--- Form untuk input data -->
        <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $query_mysql = mysqli_query($conn, "SELECT * FROM datapenjualan WHERE id='$id'") or die(mysql_error($conn));
        $nomor = 1;
        while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <input type="text" name="name" placeholder="Nama" value="<?php echo $data['name'] ?>">
                <input type="email" name="email" placeholder="Email" value="<?php echo $data['email'] ?>">
                <button type="submit">Update</button>
             </form>
        <?php } ?>
    </div>
</body>

</html>
    
