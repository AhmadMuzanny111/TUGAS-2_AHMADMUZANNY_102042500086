<?php

include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * from buku_086 order by id desc");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Mini</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">Perpustakaan Mini</div>

    <div class="container">
        <h1>Daftar Buku</h1>
        <a href="tambah.php" class="btn btn-primary">+ Tambah Buku</a>

        <div class="card">
            <table>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                    </tr>

                    <?php
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['judul']; ?></td>
                            <td><?php echo $row['penulis']; ?></td>
                            <td><?php echo $row['penerbit']; ?></td>
                            <td><?php echo $row['tahun_terbit']; ?></td>
                            <td><?php echo $row['kategori']; ?></td>
                            <td><?php echo $row['stok']; ?></td>
                            <td> 
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-light">Ubah</a>
                                <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"
                                onclick="return confirm('Yakin hapus buku ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>