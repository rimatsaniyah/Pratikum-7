<!DOCTYPE html>
<html>
    <head>
        <title>Menambahkan Daftar Kontak Baru</title>
    </head>
    <body>
        <!-- membuat form menggunakan method post 
        sehingga ketika form dikirim sapat mengeksekusi simpan.php-->
        <form method="post" action="simpan.php">
            <table>

            <!-- input teks ID untuk isi cell -->
            <tr><td>ID</td><td><input type="text" onkeyup="isi_otomatis()" name="id"></td></tr>

            <!--input teks Nama dan Inpus type text untuk isi cell -->
            <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>

            <!--input teks jenis untuk isi cell -->
            <tr><td>JENIS KELAMIN</td><td><input type="text" name="jenis_kelamin"></td></tr>

            <!--input teks email untuk isi cell -->
            <tr><td>EMAIL</td><td><input type="text" name="email"></td></tr>

            <!--input teks alamat untuk isi cell -->
            <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>

            <!--input teks kota untuk isi cell -->
            <tr><td>KOTA</td><td><input type="text" name="kota"></td></tr>

            <!--input teks pesan untuk isi cell -->
            <tr><td>PESAN</td><td><input type="text" name="pesan"></td></tr>

            <!--input button simpan untuk sumbit mengirim form -->
            <tr><td colspan="2"><button type"submit">SIMPAN</button></td></tr>
            </table>
        </form>
    </body>
</html>