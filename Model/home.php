<?php
$db_ukkgalery = mysqli_connect("localhost", "root", "", "ukkgalery");

function query($query){
    global $db_ukkgalery;
    $result = mysqli_query($db_ukkgalery,$query);
    $kotak =[];
    while($row = mysqli_fetch_assoc($result)){
        $kotak[] = $row;
    }
    return $kotak;
}

function select($table){
    global $db_ukkgalery;
    $result = mysqli_query($db_ukkgalery,"SELECT * FROM  $table");
    $kotak =[];
    while($row = mysqli_fetch_assoc($result)){
        $kotak[] = $row;
    }
    return $kotak;
}

function cari($like,$pk,$table){
    global $db_ukkgalery;
    $result = mysqli_query($db_ukkgalery,"SELECT * FROM $table WHERE $pk LIKE '%$like%'");
    $kotak =[];
    while($row = mysqli_fetch_assoc($result)){
        $kotak[] = $row;
    }
    return $kotak;
}

function tambah(){
    global $db_ukkgalery;
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);

    // Pindahkan file gambar ke folder tujuan
    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
        $gambar = basename($_FILES["gambar"]["name"]);
        
        // Query hanya menyimpan gambar
        $query = "INSERT INTO buku (gambar) VALUES ('$gambar')";
        mysqli_query($db_ukkgalery, $query);

        return mysqli_affected_rows($db_ukkgalery);
    }
}
?>
