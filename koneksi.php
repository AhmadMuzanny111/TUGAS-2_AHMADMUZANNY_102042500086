<?php
$conn = mysqli_connect("localhost", "root", "", "paw_perpustakaan");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>