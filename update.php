<?php
include "koneksi.php";

if(isset($_POST["id"]) && isset($_POST["name"])){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $ip_address = $_SERVER["REMOTE_ADDR"];

    $sql = 
    "SELECT * FROM city WHERE city_id='$id'";

    if(mysqli_num_rows($conn->query($sql))==1){
        $sql = "UPDATE city SET
            nama = '$name',
            ip = '$ip_address'
        ";
        if($conn->query($sql) === TRUE){
            echo "berhasil mengubah data";
        }else {
            echo "Error : ".$sql." ". $conn->error;
        }
        
    }else {
        echo "data tidak ditemukan";
    }
} else {
    echo "id city harus diisi cuy!";
}
mysqli_close($conn);
?>