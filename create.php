<?php
include "koneksi.php";

if(isset($_POST["id"]) && isset($_POST["name"])){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $ip_address = $_SERVER["REMOTE_ADDR"];

    $sql = 
    "INSERT INTO city (
        city_id,
        name,
        ip
        )
    VALUES (
        '$id',
        '$name',
        '$ip_address'
    );";

    if($conn->query($sql)===TRUE){
        echo "Data berhasil ditambahkan";
    }
}
else {
    echo "id city dan nama harus diisi cuy!";
}
mysqli_close($conn);
?>