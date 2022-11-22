<?php
include ("koneksi.php");
if(!isset($_GET['id'])){
    header('location:tampil.php?');
}
$kode = $_GET['id'];
$sql = "SELECT * FROM tb_ecommerce WHERE id=$kode";
$query = mysqli_query($db, $sql);
$db_lailiya8nov = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
</head>
<body>
    <header>
        <h1>Form Edit Data</h1>
        <form action="hapus-tambah.php" method="POST">
            <fieldset>
                <input type="hidden" name="id" value="<?php echo $tb_ecommerce['id']?>"/>
<p>
                    <label name="nama"> nama :</label>
                    <input type="text" value="<?php echo $tb_ecommerce['nama']?>"/>
</p>
<p>
    <label for="ecommerce"> Ecommerce : </label>
    <select name='ecommerce'>
        <option value='shopee'>Shopee</option>
        <option value='tokopedia'>Tokopedia</option>
        <option value='bukalapak'>Bukalapak</option>
        <option value='blibli'>Blibli</option>
        <option value='Lazada'>Lazada</option>
</select>
</p>
<p>
    <input type= "submit" value ="kirim" name ="kirim"/>
</p>
</fieldset>
</form>
</body>
</html>