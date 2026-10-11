<?php
include 'koneksi.php';

$id           = (int) $_POST['id'];
$judul        = mysqli_real_escape_string($conn, $_POST['judul']);
$penulis      = mysqli_real_escape_string($conn, $_POST['penulis']);
$penerbit     = mysqli_real_escape_string($conn, $_POST['penerbit']);
$tahun_terbit = (int) $_POST['tahun_terbit'];
$kategori     = mysqli_real_escape_string($conn, $_POST['kategori']);
$stok         = (int) $_POST['stok'];

mysqli_query($conn, "UPDATE buku_086 SET
                        judul        = '$judul',
                        penulis      = '$penulis',
                        penerbit     = '$penerbit',
                        tahun_terbit = $tahun_terbit,
                        kategori     = '$kategori',
                        stok         = $stok
                     WHERE id = $id");

header("Location: index.php");
?>
