<h2> List Kontak </h2>

<!-- Membuat tabel yang memuat data kontak -->
<table border="1">
    <tr><th>NO</th><th>ID</th><th>NAMA</th><th>JENIS KELAMIN</th><th>EMAIL</th><th>ALAMAT</th><th>KOTA</th><th>PESAN</th></tr>

<?php
    include 'koneksi.php';// membuat koneksi denganfile koneksi.php
    $kontak = mysqli_query($koneksi, "SELECT * from kontak"); // membuat variabel kontak 
    $no = 1; //membuat variabel no (menyimpan nilai 1)
    
    // membuat perulangan
    foreach ($kontak as $row) {
        // menampilkan data dari databae yang terkoneksi
        echo
            "<tr>
                <td>$no</td>
                <td>".$row['id']."</td>
                <td>".$row['nama']."</td>
                <td>".$row['jkel']."</td>
                <td>".$row['email']."</td>
                <td>".$row['alamat']."</td>
                <td>".$row['kota']."</td>
                <td>".$row['pesan']."</td>
                </tr>";
                $no++;
    }
?>
</table>