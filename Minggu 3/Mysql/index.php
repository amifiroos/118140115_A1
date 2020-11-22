<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minggu 3 MySql</title>
</head>
<body>
    
<h1>Data Mahasiswa</h1>
====================================================

    <h3>Tambah Data</h3>
    <form action="tambah.php" method="POST" enctype="multipart/form-data">
        NRP : <input type="text" name="nrp"><br><br>
        nama : <input type="text" name="nama"><br><br>
        Foto : <input type="file" name="foto"><br><br>
        <select name="jurusan" id="">
            <?php
                $conn = mysqli_connect("localhost", "root", "", "mahasiswa") or die("koneksi database gagal");
                $query = mysqli_query($conn, "select * from jurusan");
                while($row = mysqli_fetch_array($query)) {
                    echo "<option value=\"${row['id_jur']}\">${row['nama']}</option>";
                }
            ?>
        </select><br><br>
        <button type="submit" name="simpan" value="Tambah"> Tambah </button>
    </form>

    <hr>
    <h3>Search Data</h3>
    <form action="search.php" method="POST">
        Nama : <input type="text" name="nama">
        <input type="submit" value="Cari Data" name='cari'>
    </form>

    ==================================================== 
</body>
</html>