<?php
require '../model/function.php'; 
$id = $_GET['id']; 
$buku = query("SELECT * FROM buku WHERE id = $id")[0]; // Ambil data berdasarkan ID
if(isset($_POST["submit"])){

    if(update($_POST) > 0){
        echo "  <script> 
                    alert('data berhasil diupdate!');
                    document.location.href = '../view/1.php';
                </script>";
    } else{
        echo "  <script> 
                    alert('data gagal diupdate!');
                </script>";
    }
}
?>