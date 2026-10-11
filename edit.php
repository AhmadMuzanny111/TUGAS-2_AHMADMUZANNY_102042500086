<?php

include 'koneksi.php';

$id = (int) $_GET['id'];

$query = mysqli_query($conn, "SELECT * from buku_086 where id = $id");
$row = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">Perpustakaan Mini</div>
    <div class="container">
        <h1>Ubah Buku</h1>
        <div class="card">
            <form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label>Judul</label>
                <input type="text" name="judul" value="<?php echo $row['judul']; ?>">
                <label>Penulis</label>
                <input type="text" name="penulis" value="<?php echo $row['penulis']; ?>">
                <label>Penerbit</label>
                <input type="text" name="penerbit" value="<?php echo $row['penerbit']; ?>">
                <label>Tahun Terbit</label>
                <input type="number" name="tahun_terbit" value="<?php echo $row['tahun_terbit']; ?>">
                <label>Kategori</label>
                <input type="text" name="kategori" value="<?php echo $row['kategori']; ?>">
                <label>Stok</label>
                <input type="number" name="stok" value="<?php echo $row['stok']; ?>">

                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="index.php" class="btn btn-light">Batal</a>
            </form>
        </div>
    </div>
</body>
</html>