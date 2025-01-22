<?php
require '../Model/function.php'; 
$id = $_GET['id']; 
$buku = query("SELECT * FROM buku WHERE id = $id")[0]; 
if(isset($_POST["submit"])){

    if(update($_POST) > 0){
        echo "  <script> 
                    alert('data berhasil diupdate!');
                    document.location.href = '../view/data.php';
                </script>";
    } else{
        echo "  <script> 
                    alert('data gagal diupdate!');
                </script>";
    }
}
?>