<?php
require '../Controller/update.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/create.css">
    <title>Update data</title>
</head>
<body>
    <h1>Update Data</h1>
    <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $buku['id']; ?>">
        <ul>
            <li>
                <label for="nrp"> NRP :</label>
                <input type="text" name="nrp" id="nrp" value="<?= $buku["judul"]; ?>" required>
            </li>
            <li>
                <label for="nama"> Nama :</label>
                <input type="text" name="nama" id="nama" value="<?= $buku["deskripsi"]; ?>" required>
            </li>
            <li>
                <label for="gambar"> Gambar :</label>
                <input type="text" name="gambar" id="gambar" value="<?= $buku["gambar"]; ?>" required>
            </li>
                <button type="submit" name="submit">Update data</button>
        </ul>
    </form>
</body>
</html>