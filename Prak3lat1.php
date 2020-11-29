<?php
$nama = array("Bagus", "Budi","Setiawan");

foreach ($nama as $val){
    echo "$val <br>";
}
echo "<br><br><br>";

$nama = array(
        1=>"Bagus",
        6=>"Budi",
        12=>"Setiawan");

foreach ($nama as $key => $isi){
    echo "Urutan ke-$key adalah $isi <br>";
}
echo "<br><br><br>";

function increment($value){
    $value++;
}
$x=0;
increment($x);
echo "Nilai $x";
echo "<br><br><br>";
?>