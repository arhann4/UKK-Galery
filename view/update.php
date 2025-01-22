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
                <label for="judul"> Judul :</label>
                <input type="text" name="judul" id="judul" value="<?= $buku["judul"]; ?>" required>
            </li>
            <li>
                <label for="deskripsi"> Deskripsi :</label>
                <input type="text" name="deskripsi" id="deskripsi" value="<?= $buku["deskripsi"]; ?>" required>
            </li>

                <button type="submit" name="submit">Update data</button>
        </ul>
    </form>
</body>
</html>