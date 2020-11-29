<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Data</title>
</head>

<style>
        table {
            border-collapse: collapse;
            text-align: center;
        }

        th {
            background-color: grey;
        }

        td, th {
            border: 2px solid #000;
            padding: 10px;
        }
    </style>

<body>
<h1>Hasil Pencarian</h1>
<hr><hr>
<br>
    <?php 
        $conn = mysqli_connect("localhost", "root", "", "mahasiswa");
        
        $nama = $_POST['nama'];
        $query = mysqli_query($conn, "select * from mahasiswa where nama like '%$nama%'");
        $query_jurusan = mysqli_query($conn, "select * from jurusan");
        $simpan = array();
        while($result_jurusan = mysqli_fetch_array($query_jurusan)) {
            array_push($simpan, $result_jurusan);
        }

        $jumlah = mysqli_num_rows($query);
        if($jumlah > 0) {
    ?>
        <table>
            <tr>
                <th>NRP</th>
                <th>Nama</th>
                <th>Foto</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
    <?php
            while($row = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $row['nrp'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td><img src=\"images/${row['alamat']}\" width='150' height='150'></td>";
                echo "<td>";
                foreach ($simpan as $array) {
                    if($array['id_jur'] == $row['id_jur']) {
                        echo $array['nama'];
                    }
                }
                echo "</td>";
                echo "<td><a href='delete.php?nrp=${row['nrp']}'>hapus</a></td>";
            }
        } else {
            echo "<b><p style='color:red'>Tidak ada data yang sesuai</p><b>";
        }
    ?>
        
    </table>
</body>
</html>