<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minggu 3 Tugas 1</title>
</head>
<body>

<form method="POST">
    <input type="number" name="faktorial" required>
    <br>
    <button type="submit" name="Submit">Hitung</button>
</form>

<br><br>

<?php 

function faktorial($x){
    $faktorial = 1;
    $a = 1;

    while($a<=$x){
        $faktorial = $faktorial*$a;
        $a = $a + 1;
    }
    return $faktorial;
}

if(isset($_POST['Submit'])){
    $x=$_POST['faktorial'];
    echo 'Hasil : '.faktorial($x);
}

?>


</body>
</html>