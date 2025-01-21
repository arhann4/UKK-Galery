<?php
require '../Model/function.php';

$perPage = 10;

// Cek apakah ada pencarian
if (isset($_POST['cari'])) {
    $pk = isset($_POST['pk']) ? $_POST['pk'] : 'judul'; // Default ke 'judul'
    $like = isset($_POST['like']) ? $_POST['like'] : '';
    $table = "buku";
    $buku = cari($like, $pk, $table);

    // Set nilai total pages untuk pencarian
    $totalBooks = count($buku);
    $totalPages = ceil($totalBooks / $perPage);
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // Tentukan batasan untuk query berdasarkan halaman
    $offset = ($page - 1) * $perPage;
} else {
    // Hitung total jumlah buku di database
    $totalBooks = mysqli_num_rows(mysqli_query($db_ukkgalery, "SELECT * FROM buku"));
    $totalPages = ceil($totalBooks / $perPage);

    // Tentukan halaman saat ini (default: halaman 1)
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // Tentukan batasan untuk query berdasarkan halaman
    $offset = ($page - 1) * $perPage;

    // Ambil buku dengan limit dan offset
    $buku = query("SELECT * FROM buku LIMIT $perPage OFFSET $offset");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <link rel="stylesheet" href="../css/data.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <header class="navbar navbar-default">
        <!-- Menu Navigasi -->
        <nav id="nav-menu" class="navbar-nav">
            <ul class="nav-menu">
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="login.php">Sign In</a></li>
                <li><a href="javascript:void(0);" id="scrollToTop">Data</a></li>
            </ul>
        </nav>
    </header>


    <h1>Daftar Buku</h1>
    <a href="create.php" class="btn">Tambah Data</a>
    <div class="search-container">
     <form method="post" action="">
        <input type="text" name="like" class="search-input" placeholder="Search...">
        <input type="submit" name="cari" value="cari" class="btn">
     </form>
    </div>


    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Judul Gambar</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($buku as $row) :?>
            <tr>
                <th><?= $i;?></th>
                <td>
                    <img src="../uploads/<?= $row['gambar']?>" alt="" class="img"></td>
                <td class="judul">
                    <?=$row["judul"]?>
                </td>
                <td class="penulis">
                    <?=$row["deskripsi"]?>
                </td>

                <td class="action-icons">
                    <a href="update.php"><i class="fas fa-edit"></i></a>
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $row["id"]?>">
                        <button type="submit" name="hapus"><i class="fas fa-trash"></i></button>
                    </form>
                </td>

            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    <div class="pagination">
        <!-- Tombol Previous -->
        <a href="?page=1" class="<?= $page == 1 ? 'disabled' : ''; ?>" aria-disabled="<?= $page == 1 ? 'true' : ''; ?>">
            <i class="fa fa-angle-double-left"></i>
        </a>
        <a href="?page=<?= max(1, $page - 1) ?>" class="<?= $page == 1 ? 'disabled' : ''; ?>">
            <i class="fa fa-angle-left"></i>
        </a>

        <!-- Nomor Halaman -->
        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
            <a href="?page=<?= $i ?>" class="<?= $i == $page ? 'active' : ''; ?>"><?= $i ?></a>
        <?php endfor; ?>

        <!-- Tombol Next -->
        <a href="?page=<?= min($totalPages, $page + 1) ?>" class="<?= $page == $totalPages ? 'disabled' : ''; ?>">
             <i class="fa fa-angle-right"></i>
        </a>
        <!-- Tombol Last -->
        <a href="?page=<?= $totalPages ?>" class="<?= $page == $totalPages ? 'disabled' : ''; ?>" aria-disabled="<?= $page == $totalPages ? 'true' : ''; ?>">
             <i class="fa fa-angle-double-right"></i>
        </a>
    </div>

    <script src="../js/dark.js"></script>
    <script src="../js/js.js"></script>
    <script src="../js/slide.js"></script>

</body>
</html>