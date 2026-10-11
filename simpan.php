<?php
include 'koneksi.php';

$judul = mysqli_real_escape_string($conn, $_post['judul']);
$penulis = mysqli_real_escape_string($conn, $_post['penulis']);
$penerbit = mysqli_real_escape_string($conn, $_post['penerbit']);
$tahun_terbit = (int) $_post['tahun_terbit'];
$kategori = mysqli_real_escape_string($conn, $_post['kategori']);
$stok = (int) $_post['stok'];

mysqli_query($conn, "INSERT into buku_086(judul, penulis, penerbit, tahun_terbit, kategoti, stok)
                    value ('$judul', '$penulis', '$penerbit', '$tahun_terbit', '$kategori', '$stok')");

header("Location: index.php");
?>