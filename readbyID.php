<?php
include "koneksi.php";

if(isset($_POST["id_city"])){
    $id = $_POST["id_city"];

    $sql = 
    "SELECT * FROM city WHERE city_id='$id'";

    if(mysqli_num_rows($conn->query($sql))==1){
        $result = $conn->query($sql);

        $json = mysqli_fetch_all($result,MYSQLI_ASSOC);
        echo json_encode($json);
    }else {
        echo "data tidak ditemukan";
    }
} else {
    echo "id city harus diisi cuy!";
}
mysqli_close($conn);
?>