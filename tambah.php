<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">Perpustakaan Mini</div>

<div class="container">
    <h1>Tambah Buku</h1>

    <div class="card">
        <form action="simpan.php" method="POST">
            <label>Judul</label>
            <input type="text" name="judul" required>
            <label>Penulis</label>
            <input type="text" name="penulis" required>
            <label>Penerbit</label>
            <input type="text" name="penerbit" required>
            <label>Tahun Terbit</label>
            <input type="number" name="tahun_terbit" required>
            <label>Kategori</label>
            <input type="text" name="kategori" required>
            <label>Stok</label>
            <input type="number" name="stok" required>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php" class="btn btn-light">Batal</a>
        </form>
    </div>
</div>

</body>
</html>
