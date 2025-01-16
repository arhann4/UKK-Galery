<?php
require '../Model/function.php';
if(isset($_POST["submit"])){

    if(tambah($_POST) > 0){
        echo "  <script> 
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'data.php';
                </script>";
    } else{
        echo "  <script> 
                    alert('data gagal ditambahkan!');
                </script>";
    }
 }
 
?>