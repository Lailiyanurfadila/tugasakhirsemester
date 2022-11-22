<?php
include("koneksi.php");

if(isset($_POST['kirim'])){
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $ecommerce = $_POST['ecommerce'];

    $sql = "INSERT INTO tb_ecommerce (nik, nama, ecommerce) VALUES ('$nik', '$nama', '$ecommerce')";
    $query = mysqli_query($db, $sql);

    if($query){
        echo"Sukses";
    }else{
        echo"Gagal";

    }
}
?>