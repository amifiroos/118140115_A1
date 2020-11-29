<?php
//Implementasi fungsi
function belajar_web(){
    echo "<h2> Tips Pemrograman Web <br></h2>";
    echo "Berlatih Terus Menerus";
}
belajar_web();
echo"<br><br><br>";

//Implenetasi fungsi dengan parameter
function jumlahkan ($x,$y){
    $total=$x+$y;
    echo "<h2>Penjumlahan dari : <br> </h2>";
    echo "$x + $y = $total";
}
jumlahkan(11,23);
echo "<br><br><br>";

//Implementasi fungsi dengan return
function perkalian ($angka1, $angka2){
    $hasil=$angka1*$angka2;
    return $hasil;
}
$hasil=perkalian(4,5);
echo "Perkalian 4 x 5 adalah $hasil <br>";
echo "Perkalian 7 x 2 adalah ".perkalian(7,2);
echo "<br><br><br>";

//Passing Parameter By Value
function increment($value){
    $value++;
}
$x=0;
increment($x);
echo "Nilai $x";
echo "<br><br><br>";

////Passing Parameter By Reference
function incrementt(&$value1){
    $value1++;
}
$y=0;
incrementt($y);
echo "Nilai $y";
echo "<br><br><br>";

//Default Parameter
function bar($color="black"){
    echo '<font color='.$color.'>This is some text </font><br>';
}
bar();
bar('red');
bar('green');
bar('blue');
echo "<br><br><br>";
?>