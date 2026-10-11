<?php
include 'koneksi.php';

$id = (int) $_get['id'];
mysqli_query($conn, "DELETE from buku_086 where id = $id");
header('Location: index.php');
?>