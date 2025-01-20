<?php
$db_phpdasar = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
    global $db_phpdasar;
    $result = mysqli_query($db_phpdasar,$query);
    $kotak =[];
    while($row = mysqli_fetch_assoc($result)){
        $kotak[] = $row;
    }
    return $kotak;
}

function select($table){
    global $db_phpdasar;
    $result = mysqli_query($db_phpdasar,"SELECT * FROM  $table");
    $kotak =[];
    while($row = mysqli_fetch_assoc($result)){
        $kotak[] = $row;
    }
    return $kotak;
}

function cari($like,$pk,$table){
    global $db_phpdasar;
    $result = mysqli_query($db_phpdasar,"SELECT * FROM $table WHERE $pk LIKE '%$like%'");
    $kotak =[];
    while($row = mysqli_fetch_assoc($result)){
        $kotak[] = $row;
    }
    return $kotak;
}

function tambah($post){
    global $db_phpdasar;
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $dbImg = basename($_FILES["gambar"]["name"]);
    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["gambar"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    $judul = htmlspecialchars($post["judul"]);
    $deskripsi = htmlspecialchars($post["deskripsi"]);
    $gambar =$dbImg;
    
    $query = "INSERT INTO buku VALUES ('', '$judul', '$deskripsi', '$gambar')";
    
    mysqli_query($db_phpdasar, $query);
    
    return mysqli_affected_rows($db_phpdasar);
}
?>