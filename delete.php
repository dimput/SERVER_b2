<?php
include "koneksi.php";

if(isset($_POST["id_city"])){
    $id = $_POST["id_city"];

    $sql = "SELECT * FROM city WHERE city_id='$id'";
    if(mysqli_num_rows($conn->query($sql))==1){
        $sql = 
        "DELETE FROM city WHERE city_id='$id'";
        $result = $conn->query($sql);
        echo json_encode($json);
    }else {
        echo "data tidak ada";
    }
}
else {
    echo "id city harus diisi cuy!";
}
mysqli_close($conn);
?>