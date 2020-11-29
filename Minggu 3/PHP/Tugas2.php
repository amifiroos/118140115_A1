<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minggu 3 Tugas 2</title>
</head>
<body>

<form method="POST">
    Nama : <input type="text" name="nama"> <br><br>
    <button type="submit" name="submit">Submit</button><br><br>
</form>

<?php 
function jumhuruf($nama){
    $jum = strlen($nama);
    return $jum;
}

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    if(jumhuruf($nama)==" "){
        echo '<font color="red">Nama : Nama Belum Diisi</font> <br>';
        echo '<font color="red">Harga : Harga Kosong Karena Nama Belum Diisi </font>';
    }
    else if(jumhuruf($nama)<=10){
        $harga = 300;
        $total = jumhuruf($nama)*$harga;
        echo '<font color="blue">Nama : '.$nama.'</font><br>';
        echo '<font color="blue">Harga : '.$total."</font>";
    }
    elseif(jumhuruf($nama)<=20){
        $harga = 500;
        $total = jumhuruf($nama)*$harga;
        echo '<font color="yellow">Nama : '.$nama.'</font><br>';
        echo '<font color="yellow">Harga : '.$total."</font>";
    }
    elseif(jumhuruf($nama)>20){
        $harga = 700;
        $total = jumhuruf($nama)*$harga;
        echo '<font color="green">Nama : '.$nama.'</font><br>';
        echo '<font color="green">Harga : '.$total."</font>";
    }
}
?>

</body>
</html>