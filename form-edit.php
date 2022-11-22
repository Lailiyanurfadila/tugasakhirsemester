<?php
include("koneksi.php");

if(isset($_POST['kirim'])){
    $kode = $_POST['id'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $ecommerce = $_POST['ecommerce'];

    $sql = "UPDATE tb_ecommerce SET id='$kode', nik='$nik', nama='$nama', ecommerce='$ecommerce'  WHERE id=$kode";
    $query = mysqli_query($db, $sql);

    if($query){
        header("location:tampil.php");
    }else{
        die ("gagal mengedit");
    }
}else{
    die("sukses");
}
?>