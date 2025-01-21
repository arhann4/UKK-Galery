<?php
require '../Controller/create.php';  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/create.css">
    <title>Create data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="judul"> Judul :</label>
                <input type="text" name="judul" id="judul" required>
            </li>
            <li>
                <label for="deskripsi"> deskripsi :</label>
                <input type="text" name="deskripsi" id="deskripsi" required>
            </li>
            <li>
                <label for="gambar"> Gambar :</label>
                <input type="file" name="gambar" id="gambar" required>
            </li>
                <button type="submit" name="submit">Create</button>
        </ul>
    </form>
</body>
</html>