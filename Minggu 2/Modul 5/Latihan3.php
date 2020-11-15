<?php

echo "BILANGAN PRIMA DARI 1 SAMPAI 50  :  <br>";

for ($i=1; $i<=50; $i++){
    $a=0;
    for($j=1;$j<=$i;$j++){
        if($i % $j==0){
            $a++;
        }
    }
    if($a==2){
        echo "$i ";
    }
}

?>