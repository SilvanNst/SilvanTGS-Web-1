<!DOCTYPE html>
<html>

<head>
    <title>BIODATA</title>
</head>

<body>  
    <h1 align="center">Profil Dari</h1>
    <form method="POST" action="hasil_bio.php">
        <table border="1" cellpadding="6" width>
            <tr>
                <td>Masukkan NIM Anda</td>
                <td>: <input type="number" name="masukkan_nim"></td>
            </tr>
            <tr>
                <td>Masukkan Nama Anda</td>
                <td>: <input type="text" name="nama_lengkap"></td>
            </tr>
            <td>Jenis Kelamin</td>
            <td>: <input type='radio' name='jenis_kelamin' value='Laki-Laki' />Laki-Laki</td>
            <td><input type='radio' name='jenis_kelamin' value='Wanita' />Wanita</td>
            </tr>
            <tr>
                <td>Masukkan Status</td>
                <td>: <input type="text" name="status"></td>
            </tr>
            <tr>
                <td>Masukkan No.HP</td>
                <td>: <input type="number" name="nomor_hp"></td>
            </tr>
            <tr>
                <td>Masukkan Alamat</td>
                <td>: <input type="text" name="alamat"></td>
            </tr>
        </table> 
        <button type="send">Kirim</button>
    </form>
</body>

</html>
