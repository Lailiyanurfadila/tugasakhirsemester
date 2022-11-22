<DOCTYPE html>
<html lang="en">
<head>
    <title>Form Tambah</title>
</head>
<body>
    <header>
        <h1>APLIKASI VOTING</h1>
        <h3>ECOMMERCE</h3>
</header>
<form action="proses-tambah.php" method="POST">
    <fieldset>
        <p>
            <label for="nik">NIK : </label>
            <input type="text" name="nik" />
</p>
<p>
    <label for="nama">Nama : </label>
    <input type="text" name="nama" />
</p>
<p>
    <label for="ecommerce">Ecommerce : </label>
    <select name='ecommerce'>
        <option value='shopee'>Shopee </option>
        <option value='tokopedia'>Tokopedia </option>
        <option value='bukalapak'>Bukalapak </option>
        <option value='blibli'>Blibli </option>
        <option value='lazada'>Lazada </option>
</select>
</p>
<p>
    <input type="submit" value="kirim" name="kirim" />
</p>
</fieldset>
</form>
</body>
</html>

