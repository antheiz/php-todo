<?php

// inisiasi database
$host = "172.17.0.2";
$username = "root";
$password = "salupa";
$database = "php_todolist";


// membuat koneksi
$db = mysqli_connect($host, $username, $password, $database);


// READ
function query($query) {
    
    global $db;

    $hasil = mysqli_query($db, $query);

    $data = [];

    while ( $baris = mysqli_fetch_assoc($hasil) ) {
        $data[] = $baris;
    }

    return $data;
    
}

// CREATE
function tambah($data) {

    global $db;

    $nama = htmlspecialchars($data["nama_todo"]);

    $query = "INSERT INTO mytodo VALUES (NULL, '$nama')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}


// DELETE
function hapus($id) {

    global $db;

    mysqli_query($db, "DELETE FROM mytodo WHERE id = $id");

    return mysqli_affected_rows($db);

}


// UPDATE
function ubah($data) {
    
    global $db;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama_todo"]);

    $query = "UPDATE mytodo SET nama = '$nama' WHERE id = $id";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}



?>