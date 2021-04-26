<?php
    include 'koneksi.php';
        //menyimpan data ke dalam variabel
        $id             = $_POST['id'];
        $nama           = $_POST['nama'];
        $jenis_kelamin  = $_POST['jenis_kelamin'];
        $email          = $_POST['email'];
        $alamat         = $_POST['alamat'];
        $kota           = $_POST['kota'];
        $pesan           = $_POST['pesan'];

        //insert data mengguanakan query SQL
        $query = "INSERT INTO kontak SET id='$id'. nama='$nama', jkel='$jenis_kelamin', email='$email', alamat='$alamat', kota='$kota', pesan='$pesan'";
        mysqli_query($koneksi, $query);
        // mengarahkan ke halaman index.php
        header ("location:index.php");
?>